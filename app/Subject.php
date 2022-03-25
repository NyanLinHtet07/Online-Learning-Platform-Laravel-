<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable =['subject'];

    public function teachers()
    {
        return $this->hasMany('App\Teacher','subject_id');
    }


}
