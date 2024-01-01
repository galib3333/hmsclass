<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\AppointmentRequest;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Blood;
use Exception;
use DB;


class ApiController extends Controller
{
    public function department(){
        $department = Department::get()->toArray();
        return response($department, 200);
    }
    public function doctor($dept){
        $doctor = Doctor::where('department_id',$dept)->get();
        $data=array();
        foreach($doctor as $doc){
            $data[]=array('id'=>$doc->id,'name'=>$doc->employ->name_en);
        }
        return response($data, 200);
    }

    public function blood(){
        $blood = Blood::get()->toArray();
        return response($blood, 200);
    }

    public function appStore(Request $request)
    {
        try {
            $data = new AppointmentRequest;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->appdate = $request->appdate;
            $data->department_id = $request->department_id;
            $data->doctor_id = $request->doctor_id;
            $data->details = $request->details;
            if ($data->save()) {
                $this->notice::success('We have got your request. We will contact you as soon as possible.');
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    public function appedit(string $id)
    {
        $app = AppointmentRequest::findOrFail(encryptor('decrypt', $id));
        $department = Department::get();
        $doctor = Doctor::get();
        return view('backend.patients.edit', compact('doctor', '$department', 'app'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function appaccept(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            $data = AppointmentRequest::findOrFail(\encryptor('decrypt', $id));
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->appdate = $request->appdate;
            $data->department_id = $request->department_id;
            $data->doctor_id = $request->doctor_id;
            $data->details = $request->details;
            $data->updated_by = currentUserId();
            if ($data->save()) {
                $patient = Patient::where('patient_id', $data->id)->first();
                $patient->name_en = $request->patientNameEN;
                $patient->email = $request->emailAddress;
                $patient->contact_no_en = $request->contactNumber_en;
                $this->notice::success('Successfully Accepted Appointment');
                return redirect()->route('backend.appReq.appReqIndex');
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



    public function appdestroy($id)
    {
        $app = AppointmentRequest::findOrFail(encryptor('decrypt', $id));
        if ($app->delete()) {
            $this->notice::error('Appointment Request Deleted Permanently!');
            return redirect()->back();
        }
    }
}
