<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Shift;
use App\Http\Requests\Backend\Shift\StoreShiftRequest;
use App\Http\Requests\Backend\Shift\UpdateShiftRequest;
use Exception;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shift = Shift::paginate(10);
        return view('backend.shift.index', compact('shift'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.shift.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShiftRequest $request)
    {
        try {
            $shift = new Shift();
            $shift->s_name = $request->shiftName;
            $shift->start = $request->startTime;
            $shift->end_time = $request->endTime;
            $shift->status = $request->status;
            $shift->created_by = currentUserId();
            if ($shift->save()) {
                $this->notice::success('Successfully Saved Shift');
                return redirect()->route('shift.index');
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
    public function show(Shift $shift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $shift = Shift::findOrFail(encryptor('decrypt', $id));
        return view('backend.shift.edit', compact('shift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShiftRequest $request,$id)
    {
        try {
            $shift = Shift::findOrFail(\encryptor('decrypt', $id));
            $shift->s_name = $request->shiftName;
            $shift->start = $request->startTime;
            $shift->end_time = $request->endTime;
            $shift->status = $request->status;
            $shift->updated_by = currentUserId();
            if ($shift->save()) {
                $this->notice::success('Successfully Updated Shift');
                return redirect()->route('shift.index');
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
        $shift = Shift::findOrFail(encryptor('decrypt', $id));
        if ($shift->delete()) {
            $this->notice::error('Shift Deleted Permanently!');
            return redirect()->back();
        }
    }
}
