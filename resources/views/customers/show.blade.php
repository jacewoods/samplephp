@extends('layouts.app')

@section('content')
  <h1>{{$customer->firstname}} {{$customer->lastname}}</h1>
  <ul class ="list-group">
    <li class="list-group-item">Email: {{$customer->email}}</li>

    @if (is_null($customer->address1))
    <li class="list-group-item">Address: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
    <li class="list-group-item">Address: {{$customer->address1}}</li>
    @endif

    @if (is_null($customer->address2))
    <li class="list-group-item">Address 2: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
    <li class="list-group-item">Address 2: {{$customer->address2}}</li>
    @endif

    @if (is_null($customer->city))
      <li class="list-group-item">City: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
      <li class="list-group-item">City: {{$customer->city}}</li>
    @endif

    @if (is_null($customer->state))
    <li class="list-group-item">State: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
    <li class="list-group-item">State: {{$customer->state}}</li>
    @endif

    @if (is_null($customer->zip))
    <li class="list-group-item">Zip: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
    <li class="list-group-item">Zip: {{$customer->zip}}</li>
    @endif

    @if (is_null($customer->country))
    <li class="list-group-item">Country: <font color="#CCCCCC"><i>NULL</i></font></li>
    @else
    <li class="list-group-item">Country: {{$customer->country}}</li>
    @endif

  </ul>

<hr>
<small>Created at {{$customer->created_at}}</small>
<small class="pull-right">Last updated at {{$customer->updated_at}}</small>
<hr>
<div class="btn-toolbar">
  <div class="btn-group mr-2">

    <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Edit</a>
  </div>
  <div class="btn-group mr-2">
    {!!Form::open(['action' => ['CustomersController@destroy', $customer->id], 'method' => 'POST'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
  </div>
  <a href="/customers" class="btn btn-default pull-right">Return</a>
</div>

@endsection
