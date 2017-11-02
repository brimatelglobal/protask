<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ReceivableFormRequest;
use App\Project;
use App\Receivable;

class ReceivableController extends Controller
{
    //
    public function index(){
      $receivable = Receivable::paginate(5);

      $receivables = DB::table('receivables')->select('projects.title','projects.cost','projects.type','amount')
      ->join('projects','projects.id','=','receivables.project_id')->get();


      // dd($receivable);
      return view('receivable.receivable', compact('receivables'));
   }

   //save

   public function create(){
         $project = Project::pluck('title','id');
      return view('receivable.create', compact('project'));
   }
   public function store(ReceivableFormRequest $request){
      $project = Project::first();
      $receivable = new Receivable([
         'project_id'=>$request->get('project_id'),
         'amount'=>$request->get('amount')
      ]);
      // dd($receivable);
      // $project->receivable()->save($receivable);
      $receivable->save();

      return redirect('receivable/create')->with('status','Amount Added successfully');
   }

   //Edit
   public function edit(){

   }


   public function update(){
      return view('receivable.receivable');
   }


   public function destroy(){
      return view('receivable.receivable');
   }
   public function money($value){
      return '# '.number_format($value,2);
  }
}
