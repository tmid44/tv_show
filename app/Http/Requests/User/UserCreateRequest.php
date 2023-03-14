<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'       => ['required'],
            'email'      => ['required'],
            'password'   => ['required'],
        ];
    }
}
