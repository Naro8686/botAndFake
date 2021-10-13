<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FakeRequest;
use App\Models\Fake;
use App\Models\TelegramUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FakeController extends Controller
{
    /**
     * @return TelegramUser|null
     */
    public function user(): ?TelegramUser
    {
        return TelegramUser::whereId(Auth::id())->first();
    }

    public function index(): JsonResponse
    {
        return response()->json($this->user()->fakes->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FakeRequest $request
     * @return JsonResponse
     */
    public function store(FakeRequest $request): JsonResponse
    {
        $data = $request->safe()->only([
            'track_id', 'title', 'price', 'img', 'recipient', 'address', 'category_id',
        ]);
        return response()->json($this->user()->fakes()->create($data));
    }

    /**
     * Display the specified resource.
     *
     * @param string $track_id
     * @return JsonResponse
     */
    public function show(string $track_id): JsonResponse
    {
        return response()->json($this->user()->fakes()->where('track_id', $track_id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $track_id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $track_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param string $track_id
     * @return bool|int
     */
    public function update(Request $request, string $track_id)
    {
        $fake = Fake::whereTrackId($track_id)->firstOrFail();
        $request['title'] = $request['title'] ?? $fake->title;
        $request['price'] = $request['price'] ?? $fake->price;
        $request['img'] = $request['img'] ?? $fake->img;
        $request['recipient'] = $request['recipient'] ?? $fake->recipient;
        $request['address'] = $request['address'] ?? $fake->address;
        $request->validate([
            'title' => ['required', 'max:255', Rule::unique('fakes')->ignore($fake->id)],
            'price' => ['required', 'max:255', 'regex:/^\d+(\.\d{1,2})?$/'],
            'img' => ['required', 'regex:/^((http[s]?|ftp):\/\/)([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)?$/'],
            'recipient' => ['required', 'max:255', 'regex:/^([\w]+)\s([\w]+)$/'],
            'address' => ['required', 'max:255']
        ]);
        return $fake->update($request->only([
            'title', 'price', 'img', 'recipient', 'address'
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $track_id
     * @return bool
     */
    public function destroy(string $track_id): bool
    {
        return $this->user()->fakes()->where('track_id', $track_id)->delete();
    }
}
