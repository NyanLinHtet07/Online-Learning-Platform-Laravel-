<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
        protected $fillable = ['video','lession','name','description','chapter_id','grade_id'];

        public function chapters()
        {
            return $this->belongsTo('App\Chapter', 'chapter_id');
        }
}
