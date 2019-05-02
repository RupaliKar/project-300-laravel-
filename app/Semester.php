<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';
    protected $primaryKey = 'id';
    protected $fillable = ['name','userID','deptID'];
	public function dept(){
        return $this->belongsTo('App\Department','deptID');
    }
}
