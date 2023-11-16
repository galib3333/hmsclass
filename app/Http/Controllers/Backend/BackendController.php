<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        if(fullAccess())
            return view("backend.adminDashboard");
        else
            return view("backend.dashboard");
    }
}
