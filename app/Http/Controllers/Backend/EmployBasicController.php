<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\EmployBasic;
use App\Models\Role;
use App\Models\Blood;
use Exception;
use File;
use App\Http\Requests\Backend\Employee\StoreEmployBasicRequest;
use App\Http\Requests\Backend\Employee\UpdateEmployBasicRequest;


class EmployBasicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = EmployBasic::paginate(10);
        return view('backend.employees.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        $blood = Blood::get();
        return view('backend.employees.create', compact('role', 'blood'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployBasicRequest $request)
    {
        try {
            $employee = new EmployBasic();
            $employee->name_en = $request->employeeName_en;
            $employee->name_bn = $request->employeeName_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contactNumber_en;
            $employee->contact_no_bn = $request->contactNumber_bn;
            $employee->present_address = $request->presentAddress;
            $employee->permanent_address = $request->permanentAddress;
            $employee->role_id = $request->roleId;
            $employee->gender = $request->gender;
            $employee->birth_date = $request->birthDate;
            $employee->blood_id = $request->bloodId;
            $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                return redirect()->route('employees.index');
                $this->notice::success('Employee Successfully Added');
            } else {
                return redirect()->back();
                $this->notice::error('Please try again');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back();
            $this->notice::error('Please try again');
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
        $employee = EmployBasic::findOrFail(encryptor('decrypt', $id));
        $role = Role::get();
        $blood = Blood::get();
        return view('backend.employees.edit', compact('role', 'blood', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployBasicRequest $request, string $id)
    {
        try {
            $employee = EmployBasic::findOrFail(\encryptor('decrypt', $id));
            $employee->name_en = $request->employeeName_en;
            $employee->name_bn = $request->employeeName_bn;
            $employee->email = $request->EmailAddress;
            $employee->contact_no_en = $request->contactNumber_en;
            $employee->contact_no_bn = $request->contactNumber_bn;
            $employee->present_address = $request->presentAddress;
            $employee->permanent_address = $request->permanentAddress;
            $employee->role_id = $request->roleId;
            $employee->gender = $request->gender;
            $employee->birth_date = $request->birthDate;
            $employee->blood_id = $request->bloodId;
            $employee->status = $request->status;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                return redirect()->route('employees.index');
                $this->notice::success('Employee Successfully Updated');
            } else {
                return redirect()->back();
                $this->notice::error('Please try again');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back();
            $this->notice::error('Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee= EmployBasic::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/employees/').$employee->image;
        
        if($employee->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);

            $this->notice::error('Employee Deleted Permanently!');
            return redirect()->back();
        }
    }
}
