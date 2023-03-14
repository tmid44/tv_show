<?php

namespace App\Http\Requests\Timetable;

use Illuminate\Foundation\Http\FormRequest;

class TimetableCreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'start'            => ['required'],
            'end'              => ['required'],
            'show_id'          => ['nullable'],
            'advertising_id'   => ['nullable'],
        ];
    }
}
