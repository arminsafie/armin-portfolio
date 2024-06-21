<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question' => 'required|string|min:10',
            'answer' => 'required|string',
            'publish'=>'required|min:0|max:1',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'question.required' => 'سوال الزامی است !',
            'answer.required' => ' جواب الزامی است ! ',
            'publish.min'=>'عدد را بین یک و صفر انتخواب کنید',
            'publish.max'=>'عدد را بین یک و صفر انتخواب کنید',
            'publish.required'=>'عدد را بین یک و صفر انتخواب کنید',

        ];
    }
}
