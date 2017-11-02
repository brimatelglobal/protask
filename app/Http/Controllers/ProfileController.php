<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class ProfileController extends Controller
{
    public function profile($username){
    $project = Project::find($username);
     return view('user.profile', compact('project','share'));
   }
   public function user(){
      $softwares = User::wherePosition('software developer')->get();
      $business = User::wherePosition('business developer')->get();
      return view('user.user', compact('softwares', 'business'));
   }
   public function create(){
      return view('user.create');
   }
}
