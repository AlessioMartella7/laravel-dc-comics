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
    public function messages(){
        return[
            'name.required' => 'Il nome è un parametro obbligatorio',
            'name.alpha' => 'Il nome deve contenere solo caratteri',
            'name.min' => 'Il nome deve contenere minimo due caratteri',
            'weight.required' => 'Il peso è un parametro obbligatorio',
            'weight.numeric' => 'Il peso deve essere un numero',
            'image.required' => 'L\'immagine è un parametro obbligatorio',
            'image.url' => 'Inserire un URL per l\'immagine',
            'length.required' => 'La lunghezza è un parametro obbligatorio',
            'lenght.numeric' => 'La lunghezza deve essere un numero',
            'material.required' => 'Il materiale è un parametro obbligatorio',
            'material.min' => 'Il materiale deve contenere minimo tre caratteri',
            'type.required' => 'Il tipo è un parametro obbligatorio',
            'type.min' => 'Il tipo deve contenere minimo tre caratteri',

        ];
    }
}
