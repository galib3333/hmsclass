<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\EmployBasic;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\User\AddNewRequest;
use App\Http\Requests\Backend\User\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('backend.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        $employee = EmployBasic::get();
        return view('backend.user.create', compact('role', 'employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $user = new User();
            $user->name_en = $request->userName_en;
            $user->email = $request->EmailAddress;
            $user->contact_no_en = $request->contactNumber_en;
            $user->role_id = $request->roleId;
            $user->status = $request->status;
            $user->full_access = $request->fullAccess;
            $user->password = Hash::make($request->password);

            $user->created_by = currentUserId();
            if ($user->save()) {
                return redirect()->route('user.index');
                Toastr::success('Successfully Saved User!');
            } else {
                return redirect()->back()->withInput();
                Toastr::error('Please try again!');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput();
            Toastr::error('Please try again!');
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
        $role = Role::get();
        $user = User::findOrFail(encryptor('decrypt', $id));
        $employee = EmployBasic::get();
        return view('backend.user.edit', compact('user', 'role', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        try {
            $user = User::findOrFail(\encryptor('decrypt', $id));
            $user->name_en = $request->userName_en;
            $user->email = $request->EmailAddress;
            $user->contact_no_en = $request->contactNumber_en;
            $user->role_id = $request->roleId;
            $user->status = $request->status;
            $user->full_access = $request->fullAccess;
            if ($request->password)
                $user->password = Hash::make($request->password);

                $user->updated_by = currentUserId();
            if ($user->save()) {
                return redirect()->route('user.index');
                Toastr::success('Successfully Updated User!');
            } else {
                return redirect()->back()->withInput();
                Toastr::error('Please try again!');
            }

        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->withInput();
            Toastr::error('Please try again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/users/') . $user->image;

        if ($user->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            Toastr::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }

}
