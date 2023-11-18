<?php

namespace App\Http\Controllers\Backend;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Patient::paginate(10);
        return view('backend.patient.index', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = Patient::get();
        return view('backend.patient.create', compact('patient'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            $patient = new Patient();
            $patient->patient_id = $request->userName_en;
            $patient->first_name = $request->userName_bn;
            $patient->last_name = $request->EmailAddress;
            $patient->email = $request->contactNumber_en;
            $patient->phone = $request->contactNumber_bn;
            $patient->present_address = $request->roleId;
            $patient->status = $request->status;
            $patient->full_access = $request->fullAccess;
            $patient->language = 'en';
            $patient->password = Hash::make($request->password);

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $user->image = $imageName;
            }

            if ($user->save()) {
                return redirect()->route('user.index')->with('success', 'Successfully Saved User');
            } else {
                return redirect()->back()->withInput()->with('error', 'Please try again');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
