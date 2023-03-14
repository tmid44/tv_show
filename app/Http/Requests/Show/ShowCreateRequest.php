<?php

namespace App\Http\Requests\Show;

use Illuminate\Foundation\Http\FormRequest;

class ShowCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'              => ['required'],
            'description'        => ['required'],
            'duration_minutes'   => ['required'],
        ];
    }
}
