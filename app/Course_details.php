<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_details extends Model
{
    protected $table = 'course_details';
    protected $primaryKey = 'id';
    protected $fillable = ['book_name','course_name','pdf','slide','software','deptID','semesterID'];
	
	  public function dept(){
        return $this->belongsTo('App\Department','deptID');
    }
	  public function semester(){
        return $this->belongsTo('App\Semester','semesterID');
    }
	public function course(){
        return $this->belongsTo('App\Course','course_name');
    }
}
