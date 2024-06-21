<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            "title"=>"required|string",
            "body"=>"required|string",
            "city"=>"required|string",
            "startDate"=>"required|string",
            "endDate"=>"required|string",
            "company"=>"required|string",
            "type"=>"required",
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
            'title.required' => 'تایتل الزامی است !',
            'body.required' => ' متن الزامی است ! ',
            'city.required' => ' شهر الزامی است ! ',
            'startDate.required' => ' تاریخ شروع الزامی است ! ',
            'endDate.required' => ' تاریخ اتمام الزامی است ! ',
            'company.required' => ' کمپانی الزامی است ! ',
            'type.required' => ' تایپ الزامی است ! ',

        ];
    }
}
