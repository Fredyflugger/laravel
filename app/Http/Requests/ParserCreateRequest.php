<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParserCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'source_url' => ['required', 'url', 'min:3', 'max:500'],
            'name' => ['required', 'string', 'min:3', 'max:50'],
        ];
    }
}
