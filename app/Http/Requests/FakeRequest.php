<?php

namespace App\Http\Requests;

use Str;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FakeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $name = $this['category_name'] ?? null;
        $category = Category::whereName($name)->firstOr(function () {
            return new Category(['id' => 'null']);
        });

        $this->merge([
            'track_id' => generateTrackId(),
            'category_id' => !is_null($name) ? $category->id : null,
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'category_id' => 'Category Name',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        $categoryNames = Category::get()->pluck(['name'])->map(function ($name) {
            return Str::ucfirst($name);
        });
        return [
            'recipient.regex' => 'The recipient format is invalid. Example:Ivan Ivanov',
            'img.regex' => 'The image link format is invalid. Example:https://domain.com/image.jpg',
            'price.regex' => 'The price format is invalid. Example:123 or 123.45',
            'category_id.exists' => "The selected Category Name is invalid. Example:{$categoryNames->implode(',')}",
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'track_id' => ['required', 'unique:fakes'],
            'title' => ['required', 'unique:fakes', 'max:255'],
            'price' => ['required', 'max:255', 'regex:/^\d+(\.\d{1,2})?$/'],
            'img' => ['required', 'regex:/^((http[s]?|ftp):\/\/)([^:\/\s]+)((\/\w+)*\/)([\w\-\.]+[^#?\s]+)(.*)?(#[\w\-]+)?$/'],
            'recipient' => ['required', 'max:255', 'regex:/^([\w]+)\s([\w]+)$/'],
            'address' => ['required', 'max:255'],
            'category_id' => ['required', 'exists:categories,id']
        ];
    }
}
