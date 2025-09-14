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
            //
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tel' => 'required|numeric|digits_between:10,11',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.string' => '名前は文字列で入力してください。',
            'name.max' => '名前は255文字以内で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.string' => 'メールアドレスは文字列で入力してください。',
            'email.email' => '有効なメールアドレスの形式（abc@example.comなど）で入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'tel.required' => '電話番号は必須です。',
            'tel.numeric' => '電話番号は数字で入力してください。',
            'tel.digits_between' => '電話番号は10桁か11桁で入力してください（ハイフンは入れないでください）。',
        ];
    }
}
