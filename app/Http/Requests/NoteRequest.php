<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:50',
            'last_name' => 'string|max:50',
            'surname' => 'string|max:50',
            'company' => 'nullable|string|max:100',
            'phone' => 'string|max:12',
            'date_of_birth' => 'nullable|date',
            'email' => 'string|max:50',
            'photo' => 'nullable|mimes:jpg,bmp,png'
        ];
    }
}
