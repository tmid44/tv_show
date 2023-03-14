<?php

namespace App\Http\Controllers;

use App\Http\Requests\Advertising\AdvertisingCreateRequest;
use App\Models\Advertising;

class AdvertisingController extends Controller
{
    public function index()
    {
        return Advertising::all();
    }

    public function store(AdvertisingCreateRequest $request)
    {
        $data = $request->validated();

        Advertising::create($data);

        return 'success';
    }

}
