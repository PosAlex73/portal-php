<?php

namespace App\Http\Requests;

use App\Enums\CommonStatuses;
use App\Enums\ContactTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserContactRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
            'contact' => 'required',
            'type' => ['required', Rule::in(ContactTypes::getAll())],
            'user_id' => 'required|exists:users,id'
        ];
    }
}
