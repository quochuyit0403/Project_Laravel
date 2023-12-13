<?php

namespace App\Http\Requests\Hotel;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name' => 'required',
            'thumb' => 'required',
            'thumb_1' => 'required',
            'thumb_2' => 'required',
            'thumb_3' => 'required',
            'thumb_4' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Vui lòng nhập tên Khách sạn!",
            'thumb.required' => "Tên file ảnh không được để trống!",
            'thumb_1.required' => "Tên file ảnh không được để trống!",
            'thumb_2.required' => "Tên file ảnh không được để trống!",
            'thumb_3.required' => "Tên file ảnh không được để trống!",
            'thumb_4.required' => "Tên file ảnh không được để trống!",
        ];
    }
}
