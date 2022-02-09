<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
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
            'portfolio_id' => 'required|exists:portfolios',
            'title' => 'required|min:2|max:255',
            'description' => 'required',
            'image' => 'nullable',
            'url' => 'required|url|max:255',
            'user_id' => 'required|exists:users,id'
        ];
    }
}
