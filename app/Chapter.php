<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['cover','chapter','name','description','subject_id','grade_id','teacher_id'];

     public function grades()
     {
         return $this->belongsTo('App\Grade' , 'grade_id');
     }

     public function subjects()
     {
         return $this->belongsTo('App\Subject', 'subject_id');
     }

     public function teachers()
     {
         return $this->belongsTo('App\Teacher', 'teacher_id');
     }

     public function users()
     {
         return $this->belongsToMany('App\User', 'order_users');
     }

    // public function grades()
    // {
    //     return $this->hasMany('App\Grade','grade_id');
    // }
}

