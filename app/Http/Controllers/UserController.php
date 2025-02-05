<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::lazy();
    }

    public function show(User $user)
    {
        return User::find($user->id)->firstOrFail();
    }

    public function edit()
    {
        return '';
    }
}
