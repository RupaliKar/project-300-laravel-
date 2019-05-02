<?php

namespace App\Http\Controllers\Admin\Course;
use App\Semester;
use App\Department;
use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index(){
		$semester = Semester::orderBy('id','DESC')->get();
		$department = Department::orderBy('id','DESC')->get();
		$table = Course::orderBy('id','DESC')->get();
	return view('admin.course.course')->with(['table'=>$table,'department' => $department, 'semester' => $semester]);
    }
	public function save(Request $request){
        $table = new Course();
		
		$validate = $request->validate([
            'name' => 'required',
            'course_code' => 'required|min:2',
            'course_credit' => 'required',
            'deptID' => 'required',
            'semesterID' => 'required',
        ]);
		
		
        $table->name = $request->name;
        $table->course_code = $request->course_code;
        $table->course_credit = $request->course_credit;
        $table->deptID = $request->deptID;
        $table->semesterID = $request->semesterID;
        $table->save();
        return redirect()->back();
    }
	
	 //Edit
    public function edit(Request $request){
        $table= Course::find($request->id);
        $table->name = $request->name;
        $table->course_code = $request->course_code;
        $table->course_credit = $request->course_credit;
        $table->deptID = $request->deptID;
        $table->semesterID = $request->semesterID;
        $table->save();
        return redirect()->back();
    }
	
	 //Delete
    public function del($id){
        $table = Course::find($id);
        $table->delete();
        return redirect()->back();
    }


}
