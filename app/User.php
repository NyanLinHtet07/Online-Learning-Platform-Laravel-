<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function getFullNameAttribute ()
    {
        return "{$this -> firstname} {$this -> lastname}";
    }
    protected $fillable = [
        'firstname','lastname','user_id','phone','address','city','state','grade_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this -> belongsToMany('App\Role','role_users');
    }

    public function grade()
    {
        return $this->belongsTo('App\grade', 'grade_id');
    }

    public function exams()
    {
        return $this->hasMany('App\Exam', 'user_id');
    }

    public function chapters()
    {
        return $this->belongsToMany('App\Chapter', 'order_users');
    }
}
