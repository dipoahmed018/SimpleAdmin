<?php

namespace App\Http\Requests\HTMLSnippet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHTMLSnippetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:200|min:2',
            'description' => 'required|string|max:2000|min:2',
            'snippet' => 'required|string|max:4000|min:3',
        ];
    }
}
