<?php

namespace App\Http\Requests;

use App\Enums\CommonStatuses;
use App\Enums\UserTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email',
            'type' => ['required', Rule::in(UserTypes::getAll())],
            'status' => ['required', Rule::in(CommonStatuses::getAll())],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
