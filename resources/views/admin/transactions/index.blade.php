@extends('layouts.admin')


@section('content')
<div class="container-fluid">
    <table class="table">
      <thead>
        <tr>
          <td>#.</td>
          <td>Daily amount</td>
          <td>date</td>
         
        </tr>
      </thead>
      <tbody>
        @foreach($transactions as $transaction)
          <tr>
            <td>{{$transaction->trans_id}}</td>
            <td>{{$transaction->id}}</td>
            <td>{{$transaction->branch_id}}</td>
            <td>{{$transaction->agent_id}}</td>
            td>{{$transaction->daily_amount}}</td><
            <td>{{$transaction->daily}}</td>
            <td>{{$transaction->date}}</td>
          
           
            <td>
              <a href="{{route('transaction.show', ['transaction' => $transaction->id]) }}">
                <i class="fa fa-search-plus text-info"></i>
              </a>
              <a href="">
                <i class="fa fa-edit text-warning"></i>
              </a>
              <a href="">
                <i class="fa fa-trash text-danger"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  
  </div>

    @endsection














