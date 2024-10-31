<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSwordRequest extends FormRequest
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
            'name' => 'required|alpha|string|min:2',
            'weight' => 'required|numeric|integer',
            'image' => 'required|url',
            'length' => 'required|numeric|integer',
            'material' => 'required|string|min:3',
            'type' => 'required|string|min:4',
        ];
    }
}
