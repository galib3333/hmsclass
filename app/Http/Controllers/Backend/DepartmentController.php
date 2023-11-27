<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Department;
use Exception;
use App\Http\Requests\Backend\Department\StoreDepartmentRequest;
use App\Http\Requests\Backend\Department\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Department::paginate(10);
        return view('backend.department.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::get();
        return view('backend.department.create', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        try {
            $department = new Department();
            $department->dep_name = $request->depName;
            $department->dep_des = $request->depDes;
            $department->status = $request->status;
            $department->created_by = currentUserId();
            if ($department->save()) {
                $this->notice::success('Department Successfully Saved');
                return redirect()->route('department.index');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::findOrFail(encryptor('decrypt', $id));
        return view('backend.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, $id)
    {
        try {
            $department = Department::findOrFail(\encryptor('decrypt', $id));
            $department->dep_name = $request->depName;
            $department->dep_des = $request->depDes;
            $department->status = $request->status;
            $department->created_by = currentUserId();
            if ($department->save()) {
                $this->notice::success('Department Successfully Updated');
                return redirect()->route('department.index');
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
        $department = Department::findOrFail(encryptor('decrypt', $id));
        if ($department->delete()) {
            $this->notice::warning('Department Deleted Permanently!');
            return redirect()->back();
        }
    }
}
