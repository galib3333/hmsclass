<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Birth;
use App\Models\Patient;
use App\Http\Requests\Backend\Birth\StoreBirthRequest;
use App\Http\Requests\Backend\Birth\UpdateBirthRequest;
use Exception;

class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $birth = Birth::paginate(10);
        return view('backend.birth.index', compact('birth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $femalePatients = Patient::where('gender', 'Female')->get();
        return view('backend.birth.create', compact('femalePatients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBirthRequest $request)
    {
        try {
            $birth = new Birth();
            $birth->patient_id = $request->patientId;
            $birth->title = $request->title;
            $birth->birth_date = $request->birthDate;
            $birth->gender = $request->gender;
            $birth->description = $request->description;
            $birth->doc_ref = $request->docRef;
            $birth->status = $request->status;
            $birth->created_by = currentUserId();
            if ($birth->save()) {
                $this->notice::success('Successfully Saved Birth Information');
                return redirect()->route('birth.index');
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
    public function show(Birth $birth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $birth = Birth::findOrFail(encryptor('decrypt', $id));
        $patient = Patient::get();
        return view('backend.birth.edit', compact('patient','birth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBirthRequest $request, $id)
    {
        try {
            $birth = Birth::findOrFail(\encryptor('decrypt', $id));
            $birth->patient_id = $request->patientId;
            $birth->title = $request->title;
            $birth->birth_date = $request->birthDate;
            $birth->gender = $request->gender;
            $birth->description = $request->description;
            $birth->doc_ref = $request->docRef;
            $birth->status = $request->status;
            $birth->updated_by = currentUserId();
            if ($birth->save()) {
                $this->notice::success('Successfully Updated Birth Information');
                return redirect()->route('birth.index');
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
        $birth = Birth::findOrFail(encryptor('decrypt', $id));
        if ($birth->delete()) {
            $this->notice::error('Birth Information Deleted Permanently!');
            return redirect()->back();
        }
    }
}
