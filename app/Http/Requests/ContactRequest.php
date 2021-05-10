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
            'name' => 'required',
            'subject' => 'required|min:20',
            'email' => 'required|email',
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
            'name.required' => 'Please enter your name.',
            'email.email' => 'Your email not valid.',
            'message.required' => 'Please enter your message text.',
            'subject.required' => 'Please enter subject message.',
        ];
    }

}
