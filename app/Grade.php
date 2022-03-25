<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['grade'];

    //  public function chapter()
    //   {
    //       return $this->hasMany('App\Chapter','grade_id');
    //  }

    // public function chapter()
    // {
    //     return $this->belongsTo('App\Chapter');
    // }
}
