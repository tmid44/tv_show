<?php

namespace App\Http\Controllers;

use App\Http\Requests\Show\ShowCreateRequest;
use App\Models\Show;

class ShowController extends Controller
{
    public function index()
    {
        return Show::all();
    }

    public function store(ShowCreateRequest $request)
    {
        $data = $request->validated();

        Show::create($data);

        return 'success';
    }

    public function show(Show  $show)
    {
        return $show;
    }

}
