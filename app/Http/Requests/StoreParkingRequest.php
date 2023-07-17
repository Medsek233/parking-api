<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParkingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'vehicle_id' => ['required','integer', 'exists:vehicles,id,deleted_at,NULL,user_id,'.auth()->id()],
            'zone_id' => ['required','integer', 'exists:zones,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
