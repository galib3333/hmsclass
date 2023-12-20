<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Appointment;
use App\Models\AppointmentRequest;
use App\Models\Patient;
use App\Models\EmployBasic;
use App\Http\Requests\Frontend\Appointment\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = EmployBasic::get();
        $appointment = Appointment::get();
        return view("backend.appReq.appAcceptList", compact('appointment', 'employee'));
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
    public function store(StoreAppointmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    
/* app request */
    public function appRequest(){
        $app = AppointmentRequest::where('status',1)->get();
        return view("backend.appReq.appReqIndex", compact('app'));
    }
    public function acceptRequest($id){
        try {
            $app =  AppointmentRequest::findOrFail(encryptor('decrypt', $id));
            $pdata=Patient::select('id')->where('contact_no_en',$app->phone)->first();

            if($pdata){
                $patient_id=$pdata->id;
            }else{
                $patient = new Patient();
                $patient->name_en = $app->name;
                $patient->email = $app->email;
                $patient->contact_no_en = $app->phone;
                $patient->gender = $app->gender;
                $patient->blood_id = $app->blood_id;
                $patient->status = 1;
                $patient->created_by = currentUserId();

                $patient->save();
                $patient->patient_id = 'PT-'.date('Ym').$patient->id;
                $patient->save();
                $patient_id=$patient->id;
            }

            $appointment=new Appointment();
            $appointment->patient_id=$patient_id;
            $appointment->app_date=$app->appdate;
            $appointment->employ_id=$app->doctor_id;
            $appointment->problem=$app->details;
            $appointment->approve=1;
            $appointment->status=0;
            $appointment->serial=Appointment::where('employ_id',$app->doctor_id)->where('app_date',$app->appdate)->count() + 1;
            $appointment->created_by = currentUserId();
            if($appointment->save()){
                $app->status = 2;
                $app->save();
                $this->notice::success('Successfully Saved Appointment. Serial Number is: ' . $appointment->serial);
                return redirect()->route('appRequest');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back();
            }
        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back();
        }
    }
}
