<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME; 
    protected function authenticated(Request $request,$user)
    {
        if ($user -> roles[0] ->name == 'admin') {
            return redirect('/admin');
        }

        if ($user -> roles[0] ->name == 'student' and $user -> grade_id == $user -> grade_id) {
             return redirect('/learning');
         }

        //  if($user -> roles[0] ->name == 'student' and $user -> grade_id == '2') {
        //      return redirect('/learning/grade 10');
        //  }

       
         return redirect ('/');


    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
