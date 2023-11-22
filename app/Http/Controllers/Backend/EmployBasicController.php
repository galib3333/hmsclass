<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\EmployBasic;
use App\Models\Role;
use App\Models\Blood;
use Exception;
use File;
use Toastr;
use App\Http\Requests\StoreEmployBasicRequest;
use App\Http\Requests\UpdateEmployBasicRequest;


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
        return view('backend.employees.create', compact('role'));
        $blood = Blood::get();
        return view('backend.employees.create', compact('blood'));
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
            $employee->status = $request->status;
            $employee->full_access = $request->fullAccess;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                return redirect()->route('employees.index')->with('success', 'Successfully Saved Employee');
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
        $employee = EmployBasic::findOrFail(encryptor('decrypt', $id));
        return view('backend.employees.edit', compact('employee'));
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
            $employee->status = $request->status;
            $employee->full_access = $request->fullAccess;
            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/employees'), $imageName);
                $employee->image = $imageName;
            }

            if ($employee->save()) {
                return redirect()->route('employees.index')->with('success', 'Successfully Saved Employee');
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
    public function destroy($id)
    {
        $employee= EmployBasic::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/employees/').$employee->image;
        
        if($employee->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
