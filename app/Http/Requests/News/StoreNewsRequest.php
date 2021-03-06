<?php

namespace App\Http\Requests\News;

// use App\Rules\CorrectWords;
use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    protected $errorBag = 'news_store';
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
            'title' => ['required', 'string', 'min:10', 'max:100'],
            'description' => ['required', 'string', 'max:300'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'status' => ['required'],
            'image' => ['sometimes'],
            // 'rating' => ['integer', 'min:1', 'max:5'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Необходимо заполнить поле :attribute'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок',
            'description' => 'Описание'
        ];
    }
}
