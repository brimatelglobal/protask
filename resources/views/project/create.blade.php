@extends('layouts.app')

@section('title','New project')
@section('content')

<div class="col-md-10 col-md-offset-1">
   <div class="well well bs-component">
      <form class="form-horizontal" method="post" action="/project">
         @foreach ($errors->all() as $error)
         <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <!-- show success if save to Database -->
            @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
            @endif
         {!!csrf_field()!!}
         <fieldset>
            <legend class="text-center bg-primary">Create New Project</legend>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="form-group">
                     <label for="title" class="col-md-6">Project Title</label><br>
                    <div class="col-md-10">
                       <input type="text" class="form-control" name="title" id="title" placeholder="Project Title">
                    </div>
                  </div>
                  <div class="form-group">
                     <label for="description" class="col-md-6">Description</label>
                     <div class="col-md-10">
                        <textarea class="form-control" rows="5" name="description" id="descrition" placeholder="The project details and features"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                     <label for="type" class="col-md-6">Project Type</label>
                     <div class="col-md-10">
                        <select class="form-control" name="type">
                           <option value="">Select Project Type</option>
                           <option value="Mobile App">Mobile App</option>
                           <option value="Web App">Web App</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="client" class="col-md-6">Client</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" name="client" id="client" placeholder="Client Name">
                     </div>
                   </div>
                   <div class="form-group">
                    <label for="duration" class="col-md-6">Project Due Date</label>
                      <div class="col-md-10">
                         <input type="date" class="form-control"name="due_date" id="duration" placeholder="Project Duration">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cost" class="col-md-6">Project Value</label>
                       <div class="col-md-10">
                          <input type="text" class="form-control" name="cost" id="cost" placeholder="Project Cost">
                       </div>
                     </div>
                        <div class="form-group">
                           <div class="col-md-6">
                              {{Form::label('Software Developer')}}
                           </div>
                           <div class="col-md-10">
                              {{Form::select('user_id',$users, null, array('class'=>'form-control'))}}
                           </div>

                        </div>
               </div>
               </div>
               <div class="form-group text-center">
                    <div class="">
                       <a href="/project" class="btn btn-default">Cancel</a>
                       <input type="submit" value="Create" class="btn btn-primary">
                    </div>
               </div>
            </div>
              </fieldset>
              <!-- {!!Form::close()!!} -->
           </form>
   </div>
</div>
@endsection
