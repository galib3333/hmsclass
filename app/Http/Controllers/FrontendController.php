<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view("frontend.home");
    }
}
