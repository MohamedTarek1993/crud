<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{
   
  

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:3', 'max:255'],
            'last_name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'min:3', 'max:255'],
            'phone' => ['required', 'numeric', 'min:3'],
            'bank_account_number' => ['required', 'string', 'min:3', 'max:255'],
        ];
        function messages(){
            return [
                'first_name.required' => 'First Name is required',
                'last_name.required' => 'Last Name is required',
                'email.required' => 'Email is required',
                'phone.required' => 'Phone is required',
                'bank_account_number.required' => 'Bank Account Number is required',
                    
            ];
        }

    }
}
