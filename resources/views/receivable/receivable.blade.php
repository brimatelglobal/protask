@extends('layouts.app')

@section('title', 'Receivable')

@section('content')
   <div class="container col-md-10 col-md-offset-1">
      <div class="well well bs-component">
         <h3 class="text-center bg-primary">Receivable</h3>
         @if($receivables->isEmpty())
            <p>There is no Receivable</p>
         @else
            <table class="table table-condensed table-striped table-bordered">
               <thead>
                  <th>s/n</th><th>Project Title</th><th>Project Type</th><th>Project Value</th><th>Amount Received</th><th>Balance</th>
               </thead>
               <tbody>
                  @foreach ($receivables as $receive)
                  <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$receive->title}}</td>
                     <td>{{$receive->type}}</td>
                     <td>{{'# '.number_format($receive->cost,2)}}</td>
                     <td>{{'# '.number_format($receive->amount,2)}}</td>
                     <td>{{'# '.number_format($receive->cost - $receive->amount,2)}}</td>
                     <td></td>
                  </tr>

                  @endforeach
               </tbody>
            </table>
            {{-- {{ $receivables->render() }} --}}
         @endif
      </div>
   </div>
@endsection
