<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderUser extends Model
{
    protected $fillable = ['user_id','chapter_id','approve','total'];
}
