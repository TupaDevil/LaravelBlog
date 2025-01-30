<?php

namespace App\Http\Requests\Friend;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'nick_name' => 'required|string',
            'age' => 'integer',
            'alive' => 'integer',
            'prefered_weapon' => 'string',
            'weapon_id' => '',
            'sex_id' => '',
            'perks' => '',
        ];
    }
}
