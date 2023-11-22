<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Death;
use App\Http\Requests\StoreDeathRequest;
use App\Http\Requests\UpdateDeathRequest;

class DeathController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeathRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Death $death)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Death $death)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeathRequest $request, Death $death)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Death $death)
    {
        //
    }
}
