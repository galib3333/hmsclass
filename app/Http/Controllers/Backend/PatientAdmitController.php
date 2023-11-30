<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\PatientAdmit;
use App\Models\Patient;
use App\Models\RoomList;
use App\Http\Requests\Backend\PatientAdmit\StorePatientAdmitRequest;
use App\Http\Requests\Backend\PatientAdmit\UpdatePatientAdmitRequest;
use Exception;

class PatientAdmitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pAdmit = PatientAdmit::paginate(10);
        return view('backend.pAdmit.index', compact('pAdmit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pAdmit = PatientAdmit::get();
        $patient = Patient::get();
        $roomList = RoomList::get();
        return view('backend.pAdmit.create', compact('pAdmit', 'patient', 'roomList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientAdmitRequest $request)
    {
        try {
            $pAdmit = new PatientAdmit();
            $pAdmit->patient_id = $request->patientId;
            $pAdmit->father_name = $request->fatherName;
            $pAdmit->mother_name = $request->motherName;
            $pAdmit->husband_name = $request->husbandName;
            $pAdmit->marital_status = $request->maritalStatus;
            $pAdmit->doctor_ref = $request->doctorRef;
            $pAdmit->problem = $request->problem;
            $pAdmit->admit_date = $request->admitDate;
            $pAdmit->room_id = $request->roomId;
            $pAdmit->guardian = $request->guardian;
            $pAdmit->relation = $request->relation;
            $pAdmit->condition = $request->condition;
            $pAdmit->status = $request->status;
            $pAdmit->created_by = currentUserId();
            if ($pAdmit->save()) {
                $this->notice::success('Successfully Saved Patient.');
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
    public function show(PatientAdmit $patientAdmit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pAdmit = PatientAdmit::findOrFail(encryptor('decrypt', $id));
        $patient = Patient::get();
        $roomList = RoomList::get();
        return view('backend.pAdmit.edit', compact('pAdmit', 'roomList', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientAdmitRequest $request, $id)
    {
        try {
            $pAdmit = PatientAdmit::findOrFail(\encryptor('decrypt', $id));
            $pAdmit->patient_id = $request->patientId;
            $pAdmit->father_name = $request->fatherName;
            $pAdmit->mother_name = $request->motherName;
            $pAdmit->husband_name = $request->husbandName;
            $pAdmit->marital_status = $request->maritalStatus;
            $pAdmit->doctor_ref = $request->doctorRef;
            $pAdmit->problem = $request->problem;
            $pAdmit->admit_date = $request->admitDate;
            $pAdmit->room_id = $request->roomId;
            $pAdmit->guardian = $request->guardian;
            $pAdmit->relation = $request->relation;
            $pAdmit->condition = $request->condition;
            $pAdmit->status = $request->status;
            $pAdmit->updated_by = currentUserId();
            if ($pAdmit->save()) {
                $this->notice::success('Successfully Updated Patient Admit');
                return redirect()->route('pAdmit.index');
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
        $pAdmit = PatientAdmit::findOrFail(encryptor('decrypt', $id));
        if ($pAdmit->delete()) {
            $this->notice::error('Patient Admit Deleted Permanently!');
            return redirect()->back();
        }
    }
}
