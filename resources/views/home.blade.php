@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<!-- page content header -->
<section class="content-header">
    <h1>Dashboard<small>Control Panel</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
</section>
<section class="content">

<!-- Info Box -->
   <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-usd ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Earnings</span>
              <span class="info-box-number"><small>#</small>0</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-tint fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Project</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-check ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Completed<br>Projects</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-grain ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
     </div><hr>
   <!-- End of Info Box  -->
   <!-- Solid box of Assigned project -->
      <div class="bg-warning">
         <h3 class="text-center">Projects</h3>
      </div>
      <div class="row">
         @foreach($checks as $pro)
            {{-- modal --}}
            @foreach($projects as $detail)
            <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="detailModalLabel">{{$detail->title}}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                      <p>{{$detail->description}}</p>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Close</button>
                       {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                     </div>
                   </div>
                 </div>
            </div>
            @endforeach
{{-- The Box Details --}}
         <div class="col-md-4">
            <div class="box box-solid bg-green-gradient">
               <div class="box-header">
                  <h3 class="box-title text-center"><b>{{$pro->title}}</b> <small class="text-danger">{{$pro->type}}</small></h3>
                 <!-- tools box -->
                  <div class="pull-right box-tools">
                   <!-- button with a dropdown -->
                     <div class="btn-group">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detailModal">Details</button>

                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="glyphicon glyphicon-play"></i></button>
                     </div>
                  </div>
               </div><!-- /.box-header -->
               <div class="box-body no-padding"></div>
               <!-- /.box-body -->
               <div class="box-footer text-black">
                  <div class="row">
                        <div class="col-md-6">
                           <div class="clearfix">
                               <span class="pull-left">Project Client</span>
                               <small class="pull-right"><b>{{$pro->client}}</b></small>
                           </div>
                           <div class="progress xs">
                              <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                              <div class="clearfix">
                                  <span class="pull-left">Project Share</span>
                                  <small class="pull-right"><b>{{$pro->amount * 0.25 }}</b></small>

                              </div>
                              <div class="progress xs">
                                 <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                     <div class="col-md-10 col-md-offset-1">
                        <div class="clearfix">
                            <span class="pull-left">Project Due Date</span>
                            <small class="pull-right"><b>{{$pro->due_date}}</b></small>
                        </div>
                        <div class="progress xs">
                           <div class="progress-bar progress-bar-red" style="width: 70%;"></div>
                        </div>
                     </div>
                  </div>
               </div>
          </div>
       </div>
       @endforeach
      </div>


 </section>
=======
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
@endsection
