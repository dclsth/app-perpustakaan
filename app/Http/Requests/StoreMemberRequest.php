<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:200',
            'nim' => 'required|string|size:10',
            'email' => 'required|string|max:100',
            'nomor_telepon' => 'required|numeric|digits_between:10,15',
            'alamat' => 'required|string|max:200',
            'status' => 'required|string|in:aktif,non-aktif',  
        ];
    }
}
