<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => 'required|string|max:10',
            'admin_id' => [
                'required',
                'integer',
                'exists:admins,id'
            ]
        ];
    }

    public function authorize(): bool {
        return true;
    }

    public function messages(): array {
        return [
            'name.max' => 'El :attribute no puede tener mas de :max caracteres'
        ];
    }

    public function attributes(): array {
        return [
            'admin_id' => 'administrador',
            'name' => 'nombre'
        ];
    }

}
