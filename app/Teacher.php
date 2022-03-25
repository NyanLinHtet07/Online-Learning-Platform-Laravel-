<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = (['profile','name','position','subject_id']);

    public function subjects()
    {
        return $this->belongsTo('App\Subject', 'subject_id');
    }
}
