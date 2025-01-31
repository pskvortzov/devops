<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [1];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return [2];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return [3];
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return [4];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return [5];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
