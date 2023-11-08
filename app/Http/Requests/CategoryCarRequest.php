<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCarRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:40',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục bắt buộc nhập!',
            'name.min' => 'Tên danh mục tối thiểu 3 ký tự!',
            'name.max' => 'Tên danh mục tối đa là 40 ký tự!',
        ];
    }
}
