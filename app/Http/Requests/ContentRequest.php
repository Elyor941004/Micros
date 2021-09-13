<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'tip'=>'required|distinct',
            'name'=>'required|distinct',
            'datas'=>'required|distinct',
            'sum'=>'required',
            'comment'=>'required|distinct',
            'category'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'tip.required'=>'Введите тип',
            'name.required'=>'Введите название',
            'datas.required'=>'Введите дата',
            'sum.required'=>'Введите сумма',
            'comment.required'=>'Введите коммент',
            'category.required'=>'Виберите категории',
            'tip.distinct'=>'Введите другой введенный тип',
            'name.distinct'=>'Введите другой введенный название',
            'datas.distinct'=>'Введите другую введенный дата',
            'comment.distinct'=>'Введите другую введенный коммент',
        ];
    }
}
