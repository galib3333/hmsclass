<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Designation;
use Exception;
use App\Http\Requests\Backend\Designation\StoreDesignationRequest;
use App\Http\Requests\Backend\Designation\UpdateDesignationRequest;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designation = Designation::paginate(10);
        return view('backend.designation.index', compact('designation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $designation = Designation::get();
        return view('backend.designation.create', compact('designation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationRequest $request)
    {
        try {
            $designation = new Designation();
            $designation->desig_name = $request->desigName;
            $designation->desig_des = $request->desigDes;
            $designation->status = $request->status;

            $designation->created_by = currentUserId();
            if ($designation->save()) {
                $this->notice::success('Designation Successfully Saved');
                return redirect()->route('designation.index');
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
        $designation = Designation::findOrFail(encryptor('decrypt', $id));
        return view('backend.designation.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationRequest $request, $id)
    {
        try {
            $designation = Designation::findOrFail(\encryptor('decrypt', $id));
            $designation->desig_name = $request->desigName;
            $designation->desig_des = $request->desigDes;
            $designation->status = $request->status;

            $designation->created_by = currentUserId();
            if ($designation->save()) {
                $this->notice::success('Designation Successfully Updated');
                return redirect()->route('designation.index');
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
        $designation = Designation::findOrFail(encryptor('decrypt', $id));
        if ($designation->delete()) {
            $this->notice::error('Designation Deleted Permanently!');
            return redirect()->back();
        }
    }
}
