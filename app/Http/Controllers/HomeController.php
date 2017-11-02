<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;
use App\Project;
use Auth;
use DB;
=======

>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD

=======
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      $user = Auth::user()->id;
      $checks =    DB::table('users')->select('projects.title','projects.client','projects.due_date','projects.type','receivables.amount','users.id')->join('projects','users.id','=','projects.user_id')
         ->join('receivables','projects.id','=','receivables.project_id')->where('user_id',$user)->get();
         // foreach ($checks as $check) {
         //    $pay = $check->amount * 0.25;
         //
         // }
      $projects = Project::where('user_id',$user)->get();
      // dd($check);

       return view('home', compact('checks','projects'));
=======
        return view('home');
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
    }
}
