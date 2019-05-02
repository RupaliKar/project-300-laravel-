<?php

namespace App\Http\Controllers\Admin\Course_details;
use App\Course;
use App\Department;
use App\Semester;
use App\Course_details;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Course_detailsController extends Controller
{
    public function index(){
		$course = Course::orderBy('name','asc')->get();
		$department = Department::orderBy('name','asc')->get();
		$semester = Semester::orderBy('name','asc')->get();
        $table = Course_details::orderBy('id','asc')->get();
        return view('admin.course_details.course_details')->with(['table' => $table, 'department' => $department,'semester' => $semester, 'course' => $course]);
    }
	 public function save(Request $request){
        $table=new Course_details();
		$table->course_name = $request->course_name;
        $table->deptID = $request->deptID;
        $table->semesterID = $request->semester;
        $table->book_name = $request->book_name;
        $table->pdf = $request->pdf;
        $table->software = $request->software;
        $table->save();
        return redirect()->back();
    }
	
	 //Edit
    public function edit(Request $request){
        $table= Course_details::find($request->id);
		$table->course_name = $request->course_name;
        $table->deptID = $request->deptID;
        $table->semesterID = $request->semester;
        $table->book_name = $request->book_name;
        $table->pdf = $request->pdf;
        $table->software = $request->software;
        $table->save();
        return redirect()->back();
    }
	
	 //Delete
    public function del($id){
        $table = Course_details::find($id);
        $table->delete();
        return redirect()->back();
    }

}
