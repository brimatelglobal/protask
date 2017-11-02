<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
use App\Project;
=======
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee

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
<<<<<<< HEAD
     
=======
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest', ['except' => 'logout']);
=======
        $this->middleware('guest')->except('logout');
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
    }
}
