<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Schedule;
use App\Models\Day;
use App\Models\Shift;
use App\Models\EmployBasic;
use Exception;
use App\Http\Requests\Backend\Schedule\StoreScheduleRequest;
use App\Http\Requests\Backend\Schedule\UpdateScheduleRequest;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::paginate(10);
        return view('backend.schedule.index', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $day = Day::get();
        $shift = Shift::get();
        $employees = EmployBasic::get();
        return view('backend.schedule.create', compact('day', 'shift', 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleRequest $request)
    {
        try {
            $schedule = new Schedule();
            $schedule->employ_id = $request->employId;
            $schedule->day_id = $request->dayId;
            $schedule->shift_id = $request->shiftId;
            $schedule->status = $request->status;
            $schedule->created_by = currentUserId();
            if ($schedule->save()) {
                $this->notice::success('Schedule Successfully Added');
                return redirect()->route('schedule.index');
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
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $schedule = Schedule::findOrFail(encryptor('decrypt', $id));
        $day = Day::get();
        $shift = Shift::get();
        $employees = EmployBasic::get();
        return view('backend.schedule.edit', compact('schedule', 'day', 'shift', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, $id)
    {
        try {
            $schedule = Schedule::findOrFail(\encryptor('decrypt', $id));
            $schedule->employ_id = $request->employId;
            $schedule->day_id = $request->dayId;
            $schedule->shift_id = $request->shiftId;
            $schedule->status = $request->status;
            $schedule->updated_by = currentUserId();
            if ($schedule->save()) {
                $this->notice::success('Schedule Successfully Updated');
                return redirect()->route('schedule.index');
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
        $schedule = Schedule::findOrFail(encryptor('decrypt', $id));
        if ($schedule->delete()) {
            $this->notice::error('Schedule Deleted Permanently!');
            return redirect()->back();
        }
    }
}
