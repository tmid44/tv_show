<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();

        User::create($data);

        return 'success';
    }

}
