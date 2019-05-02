<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $dept = Department::orderBy('name','ASC')->get();
        return view('main')->with(['dept' => $dept]);
    }
}
