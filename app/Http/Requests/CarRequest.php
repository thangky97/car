<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'title' => 'required',
            'description' => 'required',
            'cate_id' => 'required',
            'image' =>
            [
                'image',
                'mimes:jpeg,png,jpg',
                'mimetypes:image/jpeg,image/png',
                'max:2048',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên bắt buộc nhập!',
            'price.required' => 'Số điện thoại bắt buộc nhập!',
            'price.numeric' => 'Số điện thoại phải là số!',
            'status.required' => 'Bạn chưa chọn trạng thái',
            'title.required' => 'Vui lòng nhập tiêu đề',
            'description.required' => 'Bạn chưa nhập mô tả',
            'cate_id.required' => 'Bạn chưa chọn danh mục',
            'image.image' => 'Bắt buộc phải là ảnh!',
            'image.max' => 'Ảnh không được lớn hơn 2MB!',
        ];
    }
}
