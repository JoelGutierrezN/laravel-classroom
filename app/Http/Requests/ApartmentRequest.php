<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest {
    public function rules(): array {
        return [
            'name' => ['required'],
            'admin_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool {
        return true;
    }
}
