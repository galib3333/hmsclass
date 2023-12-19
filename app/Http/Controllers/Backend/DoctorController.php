<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Doctor\StoreDoctorRequest;
use App\Http\Requests\Backend\Doctor\UpdateDoctorRequest;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Doctor;
use App\Models\EmployBasic;
use Exception;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = Doctor::paginate(10);
        return view('backend.doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::get();
        $designation = Designation::get();
        $employee = EmployBasic::where('role_id', 2)->get();
        return view('backend.doctor.create', compact('department', 'designation', 'employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        try {
            $doctor = new Doctor();
            $doctor->employ_id = $request->employId;
            $doctor->designation_id = $request->designationId;
            $doctor->department_id = $request->departmentId;
            $doctor->biography = $request->biography;
            $doctor->specialist = $request->specialist;
            $doctor->education = $request->education;
            $doctor->fees = $request->fees;
            $doctor->status = $request->status;
            $doctor->created_by = currentUserId();
            if ($doctor->save()) {
                $this->notice::success('Doctor Successfully Saved');
                return redirect()->route('doctor.index');
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
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail(encryptor('decrypt', $id));
        $department = Department::get();
        $designation = Designation::get();
        $employee = EmployBasic::get();
        return view('backend.doctor.edit', compact('doctor', 'department', 'designation', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, $id)
    {
        try {
            $doctor = Doctor::findOrFail(\encryptor('decrypt', $id));
            $doctor->employ_id = $request->employId;
            $doctor->designation_id = $request->designationId;
            $doctor->department_id = $request->departmentId;
            $doctor->biography = $request->biography;
            $doctor->specialist = $request->specialist;
            $doctor->education = $request->education;
            $doctor->fees = $request->fees;
            $doctor->status = $request->status;
            $doctor->updated_by = currentUserId();
            if ($doctor->save()) {
                $this->notice::success('Doctor Successfully Updated');
                return redirect()->route('doctor.index');
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
        $doctor = Doctor::findOrFail(encryptor('decrypt', $id));
        if ($doctor->delete()) {
            $this->notice::error('Doctor Deleted Permanently!');
            return redirect()->back();
        }
    }

    public function doctorProfile()
    {
        $doctorId = encryptor('decrypt', session('userId'));

        // Fetch doctor's information from EmployBasic model
        $doctor = EmployBasic::find($doctorId);
        $employBasic = EmployBasic::find($doctor->employ_id);
        $profileLabels = [
            'Email Address', 'Department', 'Designation', 'Present Address',
            'Permanent Address', 'Contact Number EN', 'Contact Number BN',
            'Short Biography', 'Date Of Birth', 'Specialist', 'Gender',
            'Blood Group', 'Education', 'Fees', 'Status'
        ];

        $profileData = [
            $employBasic->email, $doctor->department->name_en, $doctor->designation->name_en,
            $employBasic->present_address, $employBasic->permanent_address,
            $employBasic->contact_no_en, $employBasic->contact_no_bn,
            $doctor->biography, $employBasic->birth_date, $doctor->specialist,
            $employBasic->gender, $employBasic->blood->name, $doctor->education,
            $doctor->fees, $employBasic->status == 1 ? 'Active' : 'Inactive'
        ];
        return view('backend.profiles.doctorProfile', compact('doctor', 'profileData', 'profileLabels' ));
    }
}
