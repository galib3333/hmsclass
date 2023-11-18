<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User; // custome
use Illuminate\Http\Request;
use Session; // custome

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$param)
    {
        // list($controller, $action) = explode('@', $request->route()->getActionName());
        // $controller= explode('\\', $controller);

        // print_r(end($controller));

        // exit;
       //$request->route()->getName()

        if(!Session::has('userId') || Session::has('userId')==null){
            return redirect()->route('logOut');
        }else{
            $user=User::find(currentUserId());
            if(!$user){
                return redirect()->route('logOut');
            }else if($user->full_access=="1"){
                return $next($request);
            }
                //return redirect()->back()->with('danger','Access Denied');
            else{
                return $next($request);
            }
        }
        return redirect()->route('logOut');
    }
}
