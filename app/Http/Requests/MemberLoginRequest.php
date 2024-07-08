<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'required',
            'pass' => 'required',
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute :Khong duoc de trong'
        ];
    }
    // public function attribute(){
    //     return [
    //         'name' => 'Ten',
    //         'email' => 'Email',
    //         'avatar' => 'Hinh Anh',
    //     ];
    // }
}
