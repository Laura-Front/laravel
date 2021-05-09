<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(374)[0-9]{9}/',
            'message' => 'required|min:20|max:500',
        ];
    }

    /**
     * Customizing The Error Messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Please enter your first name',
            'last_name.required' => 'Please enter your last name',
            'email.email' => 'Your email not valid',
            'phone.regex' => 'The phone number starts with 374 and is followed by 9 numbers',
            'phone.required' => 'Please enter your phone number',
        ];
    }

}
