<?php

namespace App\Http\Controllers\Admin\Semester;
use App\Department;
use App\Semester;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemesterController extends Controller
{
    public function index(){
        $department = Department::orderBy('name','asc')->get();
        $table = Semester::orderBy('name','asc')->get();
        return view('admin.semester.semester')->with(['table' => $table ,'department' => $department]);
    }
    public function save(Request $request){
        $table= new Semester();
		
		$validate = $request->validate([
            'name' => 'required',
        ]);
		
        $table->name= $request->name;
        $table->save();
        return redirect()->back();
    }
	
	//edit semester
    public function edit(Request $request){
        $table= Semester::find($request->id);
        $table->name= $request->name;
        $table->save();
        return redirect()->back();
    }
	
	//delete semester
	 public function del($id){
        $table = Semester::find($id);
        $table->delete();
        return redirect()->back();
    }
}
