<?php

namespace App\Http\Requests\PDFDownload;

use Illuminate\Foundation\Http\FormRequest;

class StorePDFDownloadRequest extends FormRequest
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
            'title' => "required|string|max:200|min:2",
            'file' => "required|mimes:pdf",
        ];
    }
}
