<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class teacher extends Model
{
   
 public function students()
    {

        return $this->hasMany('App\Models\Student');

    }

}
