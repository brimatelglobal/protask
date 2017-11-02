@extends('layouts.app')
@section('title', 'Project')
@section('content')
   <div class="container col-md-10 col-md-offset-1">
      <div class="well well bs-component">
         <h3 class="text-center bg-primary">Software Developer</h3>
         @if($softwares->isEmpty())
           <p>There is no User</p>
        @else
            <table class="table table-condensed table-striped table-bordered container">
               <thead>
                     <tr><th>s/n</th><th>Name</th><th>Phone Number</th><th>Email</th></tr>
               </thead>
               <tbody>
                  @foreach($softwares as $user)
                  <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$user->fullname}}</td>
                     <td>{{$user->phone}}</td>
                     <td>{{$user->email}}</td>
                  </tr>
               @endforeach
               </tbody>
            </table>
         @endif
      </div>
      {{-- Business Developer --}}
      <div class="well well bs-component">
         <h3 class="text-center bg-primary">Business Developer</h3>
          @if($business->isEmpty())
            <p>There is no User</p>
         @else
            <table class="table table-condensed table-striped table-bordered container">
               <thead>
                     <tr><th>s/n</th><th>Name</th><th>Phone Number</th><th>Email</th></tr>
               </thead>
               <tbody>
                  @foreach($business as $user)
                  <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$user->fullname}}</td>
                     <td>{{$user->phone}}</td>
                     <td>{{$user->email}}</td>
                  </tr>
               @endforeach
               </tbody>
            </table>
         @endif
      </div>
   </div>
@endsection
