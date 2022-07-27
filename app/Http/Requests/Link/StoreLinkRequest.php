<?php

namespace App\Http\Requests\Link;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
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
            'url' => 'required|string|max:2000|min:4',
            'target' => 'in:_blank,_self'
        ];
    }
}
