<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRequest;
use App\User;
use App\Project;
use Auth;

class ProjectController extends Controller
{

    public function index()
    {
      $project = Project::paginate(5);
      return view('project.project', compact('project', 'user'));
   }
    public function create()
    {
      $users = User::pluck('fullname', 'id');
      return view('project.create', compact('users'));
   }
   // save to Database
   public function store(ProjectFormRequest $request)
   {
      $user = User::first();
      $project = new Project([
         'title'=>$request->get('title'),
         'description'=>$request->get('description'),
         'type'=>$request->get('type'),
         'client'=>$request->get('client'),
         'due_date'=>$request->get('due_date'),
         'cost'=>$request->get('cost'),
         'user_id'=>$request->get('user_id')
      ]);
      $user->project()->save($project);
      return redirect('project/create')->with('status','Project created successfully');

   }
   public function edit($id){
      $project = Project::find($id);
      $users = User::pluck('fullname', 'id');
      return view('project.edit', compact('project','users'));
   }
   public function update($id, ProjectFormRequest $request){
      $project = Project::find($id);
      // dd($project);
      $project->title = $request->get('title');
      $project->description =$request->get('description');
      $project->type =$request->get('type');
      $project->client =$request->get('client');
      $project->due_date =$request->get('due_date');
      $project->cost =$request->get('cost');
      $project->user_id =$request->get('user_id');
      if($request->status != null){
         $project->status = 1;
      }else{
         $project->status = 0;
      }
      $project->save();

      return redirect('project')->with('status','Project Updated');
   }
   public function destroy($id){
      $project = Project::find($id);
      $project->delete();
         return redirect('project')->with('status','Project deleted');
   }
}
