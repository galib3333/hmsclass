<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\RoomList;
use App\Models\RoomCat;
use Exception;
use App\Http\Requests\Backend\RoomList\StoreRoomListRequest;
use App\Http\Requests\Backend\RoomList\UpdateRoomListRequest;

class RoomListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomList = RoomList::paginate(10);
        return view('backend.roomList.index', compact('roomList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomCat = RoomCat::get();
        return view('backend.roomList.create', compact('roomCat'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomListRequest $request)
    {
        try {
            $roomList = new RoomList();
            $roomList->room_cat_id = $request->roomCatId;
            $roomList->room_no = $request->roomNo;
            $roomList->floor_no = $request->floorNo;
            $roomList->description = $request->description;
            $roomList->capacity = $request->capacity;
            $roomList->price = $request->price;
            $roomList->status = $request->status;

            $roomList->created_by = currentUserId();
            if ($roomList->save()) {
                $this->notice::success('Room Successfully Added');
                return redirect()->route('roomList.index');
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
    public function show(RoomList $roomList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roomList = RoomList::findOrFail(encryptor('decrypt', $id));
        $roomCat = RoomCat::get();
        return view('backend.roomList.edit', compact('roomList', 'roomCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomListRequest $request, $id)
    {
        try {
            $roomList = RoomList::findOrFail(\encryptor('decrypt', $id));
            $roomList->room_cat_id = $request->roomCatId;
            $roomList->room_no = $request->roomNo;
            $roomList->floor_no = $request->floorNo;
            $roomList->description = $request->description;
            $roomList->capacity = $request->capacity;
            $roomList->price = $request->price;
            $roomList->status = $request->status;

            $roomList->updated_by = currentUserId();
            if ($roomList->save()) {
                $this->notice::success('Room Successfully Updated');
                return redirect()->route('roomList.index');
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
        $roomList = RoomList::findOrFail(encryptor('decrypt', $id));
        if ($roomList->delete()) {
            $this->notice::error('Room Deleted Permanently!');
            return redirect()->back();
        }
    }
}
