<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' =>'required|string|max:100|min:2',
            'content' => 'required|string|min:5'
        ];
    }

    public function messages()
    {
        return [
            'title.min' => '标题必须至少两个字符',
            'content.min' => '文章内容必须至少5个字符',
        ];
    }
}
