<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\EmployBasic;
use App\Models\Blood;
use Exception;
use App\Http\Requests\Backend\Patient\StorePatientRequest;
use App\Http\Requests\Backend\Appointment\StoreAppointmentRequest;
class FrontendController extends Controller
{
    public function index(){
        return view("frontend.home");
    }

    public function registCreate()
    {
        $patient = Patient::get();
        $blood = Blood::get();
        return view('frontend.home', compact('patient', 'blood'));    
    }

    public function registStore(StorePatientRequest $request)
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
                return redirect()->route('frontend.home');
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
    public function appCreate()
    {
        $patient = Patient::get();
        $employee = EmployBasic::get();
        return view('frontend.home', compact('patient', 'employee'));    
    }

    public function appStore(StoreAppointmentRequest $request)
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
            $patient->created_by = currentUserId();
            if ($patient->save()) {
                $this->notice::success('Successfully Saved Patient. Patient ID: ' . $patient->patient_id);
                return redirect()->route('frontend.home');
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
}
