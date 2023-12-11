<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PatientPayment;
use App\Http\Requests\StorePatientPaymentRequest;
use App\Http\Requests\UpdatePatientPaymentRequest;

class PatientPaymentController extends Controller
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
    public function store(StorePatientPaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientPayment $patientPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientPayment $patientPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientPaymentRequest $request, PatientPayment $patientPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatientPayment $patientPayment)
    {
        //
    }
}
