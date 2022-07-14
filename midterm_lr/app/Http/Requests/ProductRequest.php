<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=>'required|max:300',
            'desc'=>'required|min:10|max:500',
            'image'=>'required|max:500',
            'price'=>'required|',
            'category_id'=>'required|',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên món ăn',
            'name.max'=>'Tên ,món ăn chỉ có tối đa 300 ký tự',
            'desc.required'=>'Bạn chưa nhập mô tả',
            'desc.min'=>'Mô tả nhiều hơn 50 ký tự',
            'desc.max'=>'Mô tả nhỏ hơn 500 ký tự',
            'price.required'=>'Bạn chưa nhập giá món ăn ',
            'image.required'=>'Bạn chưa chọn ảnh',
            'category_id.required'=>'Bạn chưa chọn danh mục',
        ];
    }
}
