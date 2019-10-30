@extends('layouts.app')

@section('content')
  <h1>View Customers</h1>
  @if(count($customers) > 0)
    @foreach($customers as $customer)
    <div class="well">
      <h3><a href="/customers/{{$customer->id}}">{{$customer->firstname}} {{$customer->lastname}}</a></h3>
      <small>Created at {{$customer->created_at}}</small>
    </div>
    @endforeach
    {{$customers->links()}}
  @else
    <p>No Customers found</p>
  @endif
@endsection
