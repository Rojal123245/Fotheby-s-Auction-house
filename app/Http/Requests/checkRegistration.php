<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkRegistration extends FormRequest
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
        'title' => 'required',
        'firstname' => 'required|min:2|max:20',
        'surname' => 'required|min:2|max:20',
        'address' => 'required',
        'contactno' => 'required|numeric',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'clientstatus' => 'required',
        'bankacno' => 'required|numeric',
        'sortcode' => 'required|numeric',
        ];
    }
}
