<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlockRequest extends FormRequest
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
            'name'=> 'required',
            'addon_block'=>'numeric|min:1'
        ];
    }
    public function messages() : array
    {
        return [
            'name.required'=> 'Vui lòng nhập tên',
            'addon_block.min'=> 'Vui lòng chọn thể loại',
        ];
    }
}
