<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitFormRequest extends FormRequest
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
            'subName' => ['required', 'string', 'min:3', 'max:50'],
            'subMail' => ['required', 'string', 'min:7', 'max:70'],
            'subText' =>['required', 'string', 'min:3', 'max:500']
        ];
    }
}
