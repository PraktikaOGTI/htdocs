<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
                 'email' => 'required|email|',
                 'password' =>'required|same:doublepassword|'
             ];
         }

         public function messages() {
           return [
             'name.required' => 'Поле "логин" является обязательным',
             'email.required' => 'Поле "E-mail" является обязательным',
             'email.email' => 'Почта должна иметь корректный вид',
             'password.required' => 'Поле "Пароль" является обязательным',
             'password.same:doublepassword' => 'Пароли должны совпадать'
           ];
         }

}
