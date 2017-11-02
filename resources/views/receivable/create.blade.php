@extends('layouts.app')

@section('title', 'Receivable')

@section('content')
   <div class="col-md-6 col-md-offset-3">
      <div class="well well bs-component row">
         <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['method' => 'POST',  'url' => '/receivable', 'class' => 'form-horizontal']) !!}
               @foreach ($errors->all() as $error)
               <p class="alert alert-danger">{{ $error }}</p>
                  @endforeach
                  <!-- show success if save to Database -->
                  @if (session('status'))
                  <div class="alert alert-success"> {{ session('status') }} </div>
                  @endif
               {!!csrf_field()!!}
               <fieldset>
                  <legend class="text-center bg-primary">Add Receievable</legend>
                  <div class="form-group">
                      {!! Form::label('Project Title') !!}
                      {!! Form::select('project_id', $project, null, ['class' => 'form-control', 'required' => 'required', ]) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('Amount Received') !!}
                      {!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  </div>

                   <div class="form-group text-center">
                      <a href="/receivable" class="btn btn-default">Cancel</a>
                       {!! Form::submit("Add", ['class' => 'btn btn-primary']) !!}
                   </div>
              </fieldset>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
@endsection
