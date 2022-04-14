<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{

    /**
     * @var Mentor|Mentor[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public $mentor;

    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            $this->mentor = Mentor::findOrFail($request->user()->telegram_id);
            return $next($request);
        });
    }

    public function index()
    {
        $children = $this->mentor->users()->with(['fakes'])->paginate();
        return view('mentor.index', compact('children'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($child_id)
    {
        $mentor = $this->mentor;
        $child = $mentor->users()
            ->where('telegram_users.id', $child_id)
            ->firstOrFail();
        if ($mentor->users()->detach($child->id)) {
            $child->sendMessage([
                "text" => "❌ {$mentor->account->accountLinkVisibly()} <b>удалил Вас из списка учеников</b>",
                "parse_mode" => "html",
            ]);
            return back()->with('success', 'Ученик удалён');
        }
        return back()->with('error', 'Что То пошло не так');
    }
}
