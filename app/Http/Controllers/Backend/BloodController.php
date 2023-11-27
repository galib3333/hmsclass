<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blood;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use File;
use App\Http\Requests\Backend\Blood\StoreBloodRequest;
use App\Http\Requests\Backend\Blood\UpdateBloodRequest;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blood = Blood::paginate(10);
        return view('backend.blood.index', compact('blood'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blood.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBloodRequest $request)
    {
        try {
            $blood = new Blood();
            $blood->blood_type_name = $request->bloodTypeName;
            $blood->status = $request->status;

            $blood->created_by = currentUserId();
            if ($blood->save()) {
                $this->notice::success('Blood Group Successfully Added');
                return redirect()->route('blood.index');
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
        $blood = Blood::findOrFail(encryptor('decrypt', $id));
        return view('backend.blood.edit', compact('blood'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloodRequest $request, string $id)
    {
        try {
            $blood = Blood::findOrFail(\encryptor('decrypt', $id));
            $blood->blood_type_name = $request->bloodTypeName;
            $blood->status = $request->status;
            $blood->updated_by = currentUserId();
            if ($blood->save()) {
                $this->notice::success('Blood Group Successfully Added');
                return redirect()->route('blood.index');
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
        $blood = Blood::findOrFail(encryptor('decrypt', $id));
        if ($blood->delete()) {
            $this->notice::error('Blood Group Deleted Permanently!');
            return redirect()->back();
        }
    }
}
