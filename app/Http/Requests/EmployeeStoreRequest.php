<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_name' => 'required|min:6|max:50',
            'amount' => 'required|integer|digits_between:1000,1500000'
        ];
    }
    public function messages() 
    {
        return [
        'employee_name.min' => 'Cant afford to have a long name ?',
        'employee_name.max' => 'What'\'s up with this huge ass name ?',
        'amount.digits_between' => 'Just type what you get paid, no more, no less BITCH !'
        ];
    }
}
