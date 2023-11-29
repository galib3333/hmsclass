<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\RoomCat;
use App\Http\Requests\Backend\RoomCat\StoreRoomCatRequest;
use App\Http\Requests\Backend\RoomCat\UpdateRoomCatRequest;

class RoomCatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomCat = RoomCat::paginate(10);
        return view('backend.roomCat.index', compact('roomCat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.roomCat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomCatRequest $request)
    {
        try {
            $roomCat = new Blood();
            $roomCat->room_cat_name = $request->roomCatName;
            $roomCat->status = $request->status;

            $roomCat->created_by = currentUserId();
            if ($roomCat->save()) {
                $this->notice::success('Room Category Successfully Added');
                return redirect()->route('roomCat.index');
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
    public function show(RoomCat $roomCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomCat $id)
    {
        $roomCat = RoomCat::findOrFail(encryptor('decrypt', $id));
        return view('backend.roomCat.edit', compact('roomCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomCatRequest $request, RoomCat $id)
    {
        try {
            $blood = Blood::findOrFail(\encryptor('decrypt', $id));
            $roomCat->room_cat_name = $request->roomCatName;
            $roomCat->status = $request->status;

            $roomCat->created_by = currentUserId();
            if ($roomCat->save()) {
                $this->notice::success('Room Category Successfully Updated');
                return redirect()->route('roomCat.index');
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
    public function destroy(RoomCat $id)
    {
        $roomCat = RoomCat::findOrFail(encryptor('decrypt', $id));
        if ($roomCat->delete()) {
            $this->notice::error('Room Category Deleted Permanently!');
            return redirect()->back();
        }
    }
}
