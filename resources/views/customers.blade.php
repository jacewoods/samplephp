@extends('layouts.app')

@section('content')
  <h1>View Customers</h1>
  @if(count($customers) > 0)
    @foreach($customers as $customer)
      <ul class ="list-group">
        <li class="list-group-item">Name: {{$customer->name}}</li>
        <li class="list-group-item">Email: {{$customer->email}}</li>
        <li class="list-group-item">Message: {{$customer->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection
