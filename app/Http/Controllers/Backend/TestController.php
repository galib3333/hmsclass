<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Test;
use App\Models\Patient;
use Exception;
use App\Http\Requests\Backend\Test\StoreTestRequest;
use App\Http\Requests\Backend\Test\UpdateTestRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = Test::paginate(10);
        return view('backend.test.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = Patient::get();
        return view('backend.test.create', compact('patient'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {
        try {
            $test = new Test();
            $test->patient_id = $request->patientId;
            $test->vat = $request->vat;
            $test->discount = $request->discount;
            $test->paid = $request->paid;
            $test->status = $request->status;
            $test->created_by = currentUserId();
            if ($test->save()) {
                $this->notice::success('Test Successfully Added');
                return redirect()->route('test.index');
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

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $test = Test::findOrFail(encryptor('decrypt', $id));
        $patient = Patient::get();
        return view('backend.test.edit', compact('test','patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestRequest $request, $id)
    {
        try {
            $test = Test::findOrFail(\encryptor('decrypt', $id));
            $test->patient_id = $request->patientId;
            $test->vat = $request->vat;
            $test->discount = $request->discount;
            $test->paid = $request->paid;
            $test->status = $request->status;
            $test->updated_by = currentUserId();
            if ($test->save()) {
                $this->notice::success('Test Successfully Updated');
                return redirect()->route('test.index');
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $test = Test::findOrFail(encryptor('decrypt', $id));
        if ($test->delete()) {
            $this->notice::error('Test Deleted Permanently!');
            return redirect()->back();
        }
    }
}
