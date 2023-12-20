<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\PatientAdmit;

class BackendController extends Controller
{
    public function index(){

        $totalDoctors = Doctor::count();
        $totalPatients = Patient::count();
        $totalAppointments = Appointment::count();
        $totalPatientAdmit = PatientAdmit::count();

        if(fullAccess())
            return view("backend.adminDashboard",compact('totalDoctors','totalPatients','totalAppointments','totalPatientAdmit'));
        else
            return view("backend.dashboard",compact('totalDoctors','totalPatients','totalAppointments','totalPatientAdmit'));
    }
}
