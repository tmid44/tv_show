<?php

namespace App\Http\Requests\Advertising;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisingCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'product'            => ['required'],
            'audience'           => ['required'],
            'budget'             => ['required'],
            'duration_minutes'   => ['required'],
        ];
    }
}
