<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class score extends Model
{
    use SoftDeletes;
	protected $fillable = ['term_id','subject_id','student_id','maths','science','history'];
    public function student()
    {
        return $this->belongsTo('App\Models\Student','student_id');
    }
    public function term()
    {
        return $this->belongsTo('App\Models\Term','term_id');
    }
    public function getTotalAttribute()
    {
        return $this->maths+$this->science+$this->history;
    }
    public function getCreatedDateAttribute(){
        return Carbon::createFromFormat('Y-m-d H', $this->created_at)->toDateTimeString();
    }
}
