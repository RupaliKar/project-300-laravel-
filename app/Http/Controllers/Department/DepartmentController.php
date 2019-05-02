<?php

namespace App\Http\Controllers\Department;

use App\Course;
use App\Department;
use App\Semester;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index($id){
        $table = Department::find($id);//page link
        $semester = Semester::orderBY('id','ASC')->get();
        //$course = Course::orderBY('id','ASC')->get();
        $dept = Department::orderBy('name','ASC')->get();
        return view('department.department')->with(['table' => $table, 'dept' => $dept, 'id' => $id, 'semester' =>$semester]);
    }

    // ajax show
    public function allFaculty($id){
        $table = Faculty::orderBy('name', 'ASC')->where('departmentID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['email'] = $row->email;
            $rowData['phone_no'] = $row->phone_no;
            $rowData['gender'] = $row->gender;
            $rowData['image'] = $row->image;
            $rowData['designation'] = $row->designation;
            $rowData['departmentID'] = $row->dept['name'];
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }

    //search
    public function facultySearch(Request $request,$id){
        $search = $request->search;
        $table = Faculty::orderBy('name', 'ASC')->search($search)->where('departmentID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['email'] = $row->email;
            $rowData['phone_no'] = $row->phone_no;
            $rowData['gender'] = $row->gender;
            $rowData['image'] = $row->image;
            $rowData['designation'] = $row->designation;
            $rowData['departmentID'] = $row->dept['name'];
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }
        return response()->json($data);
    }

    public function all_courses($id){
        $table = Course::orderBy('id', 'ASC')->where('deptID',$id)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['course_code'] = $row->course_code;
            $rowData['course_credit'] = $row->course_credit;
            $rowData['deptID'] = $row->dept['name'];
            $rowData['semesterID'] = $row->semesterID;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }

    public function semester_course($id,$semID){
        $table = Course::orderBy('name', 'ASC')->where('deptID',$id)->where('semesterID',$semID)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['course_code'] = $row->course_code;
            $rowData['course_credit'] = $row->course_credit;
            $rowData['deptID'] = $row->dept['name'];
            $rowData['semesterID'] = $row->semesterID;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }


    //search
    public function courseSearch(Request $request,$id){
        $search = $request->search;
        $table = Course::orderBy('name', 'ASC')->where('deptID',$id)->search($search)->get();
        $data=[];
        foreach ($table as $row){
            $rowData['id'] = $row->id;
            $rowData['name'] = $row->name;
            $rowData['course_code'] = $row->course_code;
            $rowData['course_credit'] = $row->course_credit;
            $rowData['deptID'] = $row->dept['name'];
            $rowData['semesterID'] = $row->semesterID;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }
        return response()->json($data);
    }
	
	
	public function coursedetails($id,$course_name){
        $table = Course_details::orderBy('name', 'ASC')->where('departmentID',$id)->where('semesterID',$$semID)->get();
        $data=[];
        foreach ($table as $row){
			$rowData['id'] = $row->id;
            $rowData->course_name = $row->course_name;
			$rowData->deptID = $row->deptID;
			$rowData->semesterID = $row->semester;
			$rowData->book_name = $row->book_name;
			$rowData->pdf = $row->pdf;
			$rowData->software = $row->software;
            $rowData['created_at'] = $row->created_at->format('F j, Y');
            $data[] = $rowData;
        }

        return response()->json($data);
    }

}
