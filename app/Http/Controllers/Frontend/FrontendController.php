<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\AppointmentRequest;
use App\Models\Department;
use App\Models\Doctor;
use Exception;
use App\Http\Requests\Frontend\Appointment\StoreAppointmentRequest;

class FrontendController extends Controller
{
    public function index(){
        $department = Department::get();
        $doctor = Doctor::get();
        return view("frontend.home", compact('department', 'doctor'));
    }

    public function appStore(StoreAppointmentRequest $request)
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
}
