<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if ($this->cpf) {
            $this->merge([
                'cpf' => cleanCpf($this->cpf)
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('POST')) {
            return [
                'name' => ['required', 'min:3', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email'],
                'cpf' => ['required', 'size:11', 'unique:users,cpf'],
                'password' => ['required', Password::min(8)]
            ];
        }

        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return [
                'name' => ['nullable', 'min:3', 'max:255'],
                'password' => ['nullable', Password::min(8)]
            ];
        }
    }
}
