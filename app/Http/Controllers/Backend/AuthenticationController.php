<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\SigninRequest;
use App\Http\Requests\Authentication\SignupRequest;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function signupForm()
    {
        return view("backend.authentication.register");
    }
    public function signUpStore(SignupRequest $request)
    {
        try {
            $user = new User();
            $user->name_en = $request->FullName;
            $user->contact_no_en = $request->contact_no_en;
            $user->email = $request->EmailAddress;
            $user->password = Hash::make($request->password);
            $user->role_id = 4;
            // dd($request->all());
            if ($user->save()) {
                return redirect("login")->with("success", "Successfully Registered");
            } else {
                return redirect("login")->with("danger", "Please try again");
            }

        } catch (Exception $e) {
            // dd($e);
            return redirect("login")->with("danger", "Please try again");
        }
    }

    public function signInForm()
    {
        return view("backend.authentication.login");
    }

    // public function signInCheck(SigninRequest $request)
    // {
    //     try {
    //         $user = User::where('contact_no_en', $request->username)->orwhere('email', $request->username)->first();

    //         if ($user) {
    //             if (Hash::check($request->password, $user->password)) {
    //                 $this->setSession($user);
    //                 return redirect()->route('dashboard')->with('success', 'Successfully logged in!');
    //             } else {
    //                 return redirect()->route('login')->with('error', 'Your phone number is invalid! Please try again');
    //             }

    //         } else {
    //             return redirect()->route('login')->with('error', 'Your phone number is invalid! Please try again2');
    //         }

    //     } catch (Exception $e) {
    //         dd($e);
    //         return redirect('login')->with('error', 'Your phone number is invalid! Please try again3');

    //     }
    // }

    public function signInCheck(SigninRequest $request)
    {
        try {
            // Determine if the input is an email or a phone number
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

            $user = User::where($fieldType, $request->username)->first();

            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $this->setSession($user);
                    return redirect()->route('dashboard')->with('success', 'Successfully logged in!');
                } else {
                    return redirect()->route('login')->with('error', 'Invalid password! Please try again');
                }
            } else {
                return redirect()->route('login')->with('error', 'Invalid ' . $fieldType . '! Please try again');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect('login')->with('error', 'Invalid ' . $fieldType . '! Please try again');
        }
    }


    public function setSession($user)
    {
        return request()->session()->put([
            'userId' => encryptor('encrypt', $user->id),
            'username' => encryptor('encrypt', $user->name),
            'role' => encryptor('encrypt', $user->role->type),
            'role_id' => encryptor('encrypt', $user->role_id),
            'accessType' => encryptor('encrypt', $user->full_access),
            'roleIdentity' => encryptor('encrypt', $user->role->identity),
            'language' => encryptor('encrypt', $user->language),
            'image' => $user->image ?? 'no-image.png',

        ]);
    }

    public function signOut()
    {
        request()->session()->flush();
        return redirect('login')->with('danger', 'Successfully signed out');
    }

}
