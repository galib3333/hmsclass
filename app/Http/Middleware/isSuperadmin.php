<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; //custom
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class isSuperadmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has("userId") || Session::has("userId") == null || !Session::has("roleIdentity")) {
            return redirect()->route("logOut");
        } else {
            $user = User::findOrFail(currentUserId());
            app()->setLocale($user->language);
            if (!$user) {
                return redirect()->route("logOut");
            } else if (currentUser() != 'superadmin') {
                return redirect()->back()->with('danger', 'Access Denied');
            } else {
                return $next($request);
            }
        }
        return redirect()->route('logOut');
    }
}