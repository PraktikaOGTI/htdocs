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
            'message' => 'required|min:100',
            'name' => 'required',
            'email' => 'required|email|'
        ];
    }
    public function messages() {
      return [
        'name.required' => 'Поле "Имя" является обязательным',
        'message.required' => 'Поле "Тема сообщения" является обязательным',
        'email.required' => 'Поле "E-mail" является обязательным',
        'email.email' => 'Почта должна иметь корректный вид',
        'message.min' => 'Поле "Тема сообщения" должно иметь более 100 символов',
      ];
    }

}
