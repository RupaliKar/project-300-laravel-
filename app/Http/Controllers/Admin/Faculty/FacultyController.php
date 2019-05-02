<?php

namespace App\Http\Controllers\Admin\Faculty;
use App\Department;
use App\Faculty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function index(){
        $department = Department::orderBy('name','asc')->get();
        $table = Faculty::orderBy('name','asc')->get();
        return view('admin.faculty.faculty')->with(['table' => $table, 'department' => $department]);
    }

    public function save(Request $request){
        $table=new Faculty();
		$validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required|string',
			'phone_no' => 'numeric',
			'designation' => 'required',
			'departmentID' => 'required',
            
        ]);
		
        $table->name = $request->name;
        $table->email = $request->email;
        $table->gender = $request->gender;
        $table->phone_no = $request->phone_no;
        $table->designation = $request->designation;
        $table->departmentID = $request->departmentID;

        // image upload
        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename = md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->image = $filename;

            $request->image->move('public/uploads/faculty',$filename);
        }
        // image upload

        $table->save();
        return redirect()->back();
    }

    //Edit
    public function edit(Request $request){
        $table= Faculty::find($request->id);
        $table->name = $request->name;
        $table->email = $request->email;
        $table->gender = $request->gender;
        $table->phone_no = $request->phone_no;
        $table->designation = $request->designation;
        $table->departmentID = $request->departmentID;

        //image upload
        if ($request->hasFile('image')) {

            // previous file delete
            $file = public_path('uploads/faculty/'.$table->image);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->image->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->image = $filename;

            $request->image->move('public/uploads/faculty',$filename);
        }
        $table->save();
        return redirect()->back();
    }


    //Delete
    public function del($id){
        $table = Faculty::find($id);

        // file delete from local path
        $file = public_path('public/uploads/faculty/'.$table->image);
        if (file_exists($file)){
            unlink($file);
        }
        // file delete from local path
        $table->delete();
        return redirect()->back();
    }
}
