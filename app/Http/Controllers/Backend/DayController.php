<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Day;
use Exception;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $day = Day::paginate(10);
        return view('backend.day.index', compact('day'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('backend.day.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $day = new Day();
            $day->day_name = $request->dayName;
            $day->status = $request->status;
            $day->created_by = currentUserId();
            if ($day->save()) {
                $this->notice::success('Day Successfully Added');
                return redirect()->route('day.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $day = Day::findOrFail(encryptor('decrypt', $id));
        return view('backend.day.edit', compact('day'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $day = Day::findOrFail(\encryptor('decrypt', $id));
            $day->day_name = $request->dayName;
            $day->status = $request->status;
            $day->updated_by = currentUserId();
            if ($day->save()) {
                $this->notice::success('Day Successfully Updated');
                return redirect()->route('day.index');
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
    public function destroy(string $id)
    {
        $day = Day::findOrFail(encryptor('decrypt', $id));
        if ($day->delete()) {
            $this->notice::error('Day Deleted Permanently!');
            return redirect()->back();
        }
    }
}
