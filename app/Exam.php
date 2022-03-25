<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = "exams";
    protected $primaryKey = "id";
    protected $fillable = ['chapter_id','question','ans','option','status'];
}