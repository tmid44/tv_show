<?php

namespace App\Http\Controllers;

use App\Http\Requests\Timetable\TimetableCreateRequest;
use App\Models\Timetable;

class TimetableController extends Controller
{
    public function index()
    {
        return Timetable::all();
    }

    public function store(TimetableCreateRequest $request)
    {
        $data = $request->validated();

        Timetable::create($data);

        return 'success';
    }

    public function show(Timetable $timetable)
    {
        return $timetable;
    }

}
