<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' => 'nullable|required|string|min:11|max:11',
            'email' => 'required|email|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'akhana tmr name dawa nai.',
            'phone.required' => 'akhana tmr phone dawa nai.',
            'email.required' => 'akhana tmr email dawa nai.',
        ];
    }
}
