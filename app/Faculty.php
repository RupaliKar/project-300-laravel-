<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
	protected $table = 'faculties';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone_no','gender','image','designation','departmentID','userID'];

    public function dept(){
        return $this->belongsTo('App\Department','departmentID');
    }

    public function scopeSearch($query, $search){
        return $query->where('name','like','%'.$search.'%')
            ->orWhere('email','like','%'.$search.'%')
            ->orWhere('gender','like','%'.$search.'%')
            ->orWhere('phone_no','like','%'.$search.'%')
            ->orWhere('designation','like','%'.$search.'%');
    }
}
