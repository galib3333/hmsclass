<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Http\Requests\Backend\Patient\StorePatientRequest;
use App\Http\Requests\Backend\Patient\UpdatePatientRequest;
use Exception;
use File;
use Brian2694\Toastr\Toastr;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Patient::paginate(10);
        return view('backend.patients.index', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = Patient::get();
        return view('backend.patients.create', compact('patient'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            $patient = new Patient();
            $patient->patient_id = $request->patientId;
            $patient->first_name = $request->firstName;
            $patient->last_name = $request->lastName;
            $patient->email = $request->emailAddress;
            $patient->phone = $request->phoneNumber;
            $patient->present_address = $request->presentAddress;
            $patient->permanent_address = $request->permanentAddress;
            $patient->birth_date = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->blood_type = $request->bloodType;
            $patient->status = $request->status;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/patients'), $imageName);
                $patient->image = $imageName;
            }

            if ($patient->save()) {
                return redirect()->route('patients.index')->with('success', 'Successfully Saved Patient');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail(encryptor('decrypt', $id));
        return view('backend.patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, string $id)
    {
        try {
            $patient = Patient::findOrFail(\encryptor('decrypt', $id));
            $patient->patient_id = $request->patientId;
            $patient->first_name = $request->firstName;
            $patient->last_name = $request->lastName;
            $patient->email = $request->emailAddress;
            $patient->phone = $request->phoneNumber;
            $patient->present_address = $request->presentAddress;
            $patient->permanent_address = $request->permanentAddress;
            $patient->birth_date = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->blood_type = $request->bloodType;
            $patient->status = $request->status;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/patients'), $imageName);
                $patient->image = $imageName;
            }

            if ($patient->save()) {
                return redirect()->route('patients.index')->with('success', 'Successfully Saved Patient');
            } else {
                return redirect()->back()->withInput()->with('error', 'Please try again');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $id)
    {
        $patient= Patient::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/patients/').$patient->image;
        
        if($patient->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
