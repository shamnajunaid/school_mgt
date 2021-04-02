<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{	
	use SoftDeletes;
	protected $fillable = ['name','age','gender','teacher_id'];
    public function teachers()
    {
        return $this->belongsTo('App\Models\Teacher','teacher_id');
    }
}
