<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;


use App\Models\Patient;
use App\Models\Blood;
use App\Http\Requests\Backend\Patient\StorePatientRequest;
use App\Http\Requests\Backend\Patient\UpdatePatientRequest;
use Exception;
use Illuminate\Support\Facades\File;

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
        $blood = Blood::get();
        return view('backend.patients.create', compact('patient', 'blood'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            $patient = new Patient();
            $patient->patient_id = $request->patientId;
            $patient->name_en = $request->patientNameEN;
            $patient->name_bn = $request->patientNameBN;
            $patient->email = $request->emailAddress;
            $patient->contact_no_en = $request->contactNumber_en;
            $patient->contact_no_bn = $request->contactNumber_bn;
            $patient->present_address = $request->presentAddress;
            $patient->permanent_address = $request->permanentAddress;
            $patient->birth_date = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->blood_id = $request->bloodId;
            $patient->status = $request->status;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/patients'), $imageName);
                $patient->image = $imageName;
            }

            $patient->created_by = currentUserId();
            if ($patient->save()) {
                $this->notice::success('Successfully Saved Patient. Patient ID: ' . $patient->patient_id);
                return redirect()->route('patients.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
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
        $blood = Blood::get();
        return view('backend.patients.edit', compact('patient', 'blood'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, string $id)
    {
        try {
            $patient = Patient::findOrFail(\encryptor('decrypt', $id));
            $patient->patient_id = $request->patientId;
            $patient->name_en = $request->patientNameEN;
            $patient->name_bn = $request->patientNameBN;
            $patient->email = $request->emailAddress;
            $patient->contact_no_en = $request->contactNumber_en;
            $patient->contact_no_bn = $request->contactNumber_bn;
            $patient->present_address = $request->presentAddress;
            $patient->permanent_address = $request->permanentAddress;
            $patient->birth_date = $request->birthDate;
            $patient->gender = $request->gender;
            $patient->blood_id = $request->bloodId;
            $patient->status = $request->status;

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/patients'), $imageName);
                $patient->image = $imageName;
            }

            $patient->updated_by = currentUserId();
            if ($patient->save()) {
                $this->notice::success('Successfully Updated Patient');
                return redirect()->route('patients.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back()->withInput();
            }

        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patient= Patient::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/patients/').$patient->image;
        
        if($patient->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);

            $this->notice::error('Patient Deleted Permanently!');
            return redirect()->back();
        }
    }
}
