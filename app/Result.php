<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table ="results";
    protected $primaryKey = "id";
    protected $fillable = ['chapter_id','question_id','yes_ans','no_ans','result_json'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function chapter()
    {
        return $this->belongsTo('App\Chapter', 'chapter_id');
    }
}
