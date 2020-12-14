<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return[
            'name.required'=> 'khong de trong ban nhe',
            'email.required'=> 'khong de trong ban nhe',
            'email.email'=> 'nhap dung email vao dime may',
            'email.unique'=> 'trung cmn email roi',
            'password.required'=>'khong de trong nhe ban',
            'password.min'=>'nhap du 8 ky tu t cho chuyen trang',
            ];

    }

}
