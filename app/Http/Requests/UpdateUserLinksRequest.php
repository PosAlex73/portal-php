<?php

namespace App\Http\Requests;

use App\Enums\CommonStatuses;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserLinksRequest extends FormRequest
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
            'id' => 'required|exists:user_links',
            'title' => 'required|min:2|max:1024',
            'status' => ['required', Rule::in(CommonStatuses::getAll())],
            'user_id' => 'required|exists:users,id'
        ];
    }
}
