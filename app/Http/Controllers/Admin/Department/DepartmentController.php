<?php

namespace App\Http\Controllers\Admin\Department;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(){
        $count = Department::count();
        $table = Department::orderBy('id','DESC')->get();
        return view('admin.department.department')->with(['table'=>$table, 'count' => $count]);
    }

    public function save(Request $request){
		
	
        //dd($request->all());
        $table = new Department();
		$validate = $request->validate([
            'name' => 'required|alpha',
            'duration' => 'required|integer|min:2|digits_between: 1,3',
            'credit' => 'required|integer|min:2|digits_between: 1,3',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
		
        $table->name = $request->name;
        $table->total_credit = $request->credit;
        $table->duration = $request->duration;

        //image upload
        if ($request->hasFile('image')) {

            $extension = $request->image->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->image = $filename;

            $request->image->move('public/uploads/department',$filename);
        }
        $table->save();

        return redirect()->back();
    }
    // Edit department
    public function edit(Request $request){
        $table = Department::find($request->id);

        $table->name = $request->name;
        $table->total_credit = $request->credit;
        $table->duration = $request->duration;

        //image upload
        if ($request->hasFile('image')) {

            // previous file delete
            $file = public_path('public/uploads/department/'.$table->image);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->image->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;

            $table->image = $filename;

            $request->image->move('public/uploads/department',$filename);
        }

        $table->save();
        return redirect()->back();

    }
    //edit department
	
	//delete department
	public function del($id){
        $table = Department::find($id);

        // file delete from local path
        $file = public_path('public/uploads/department/'.$table->image);
        if (file_exists($file)){
            unlink($file);
        }
        // file delete from local path
        $table->delete();
        return redirect()->back();
    }
}
