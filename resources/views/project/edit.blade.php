@extends('layouts.app')

@section('title','New project')
@section('content')

<div class="col-md-10 col-md-offset-1">
   <div class="well well bs-component">
      {!! Form::model($project, [ 'url' => 'project/'.$project->id, 'method' => 'PUT', 'class'=>'form']) !!}
         @foreach ($errors->all() as $error)
         <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            <!-- show success if save to Database -->
            @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
            @endif
         {!!csrf_field()!!}
         <fieldset>
            <legend class="text-center bg-primary">Edit Project</legend>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                         {!! Form::label('title') !!}
                         {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('description') !!}
                      {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}

                  </div>
                  <div class="form-group">
                     <select class="form-control" name="type">
                        <option value="Mobile App">Mobile App</option>
                        <option value="Web App">Web App</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                      {!! Form::label('client') !!}
                      {!! Form::text('client', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('due_date', 'Project Due Date') !!}
                      {!! Form::date('due_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('cost', 'Project Value') !!}
                      {!! Form::text('cost', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      {!! Form::label('Software Developer') !!}
                      {!! Form::select('user_id', $users,null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>
                  <div class="form-group">
                      <div class="checkbox">
                          <label for="status">
                              {!! Form::checkbox($project->status?'checked':'' ) !!} Status
                          </label>
                      </div>
                  </div>
               </div>
            </div>
            <div class="form-group text-center">
                <a href="/project" class="btn btn-default">Cancel</a>
              {!! Form::submit("Edit", ['class' => 'btn btn-success']) !!}
            </div>
         </fieldset>
      {!! Form::close() !!}
   </div>
</div>
@endsection
