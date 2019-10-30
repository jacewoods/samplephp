@extends('layouts.app')

@section('content')
  <h1>{{$customer->firstname}} {{$customer->lastname}}</h1>
  <div>
    {{$customer->email}}
  </div>

<hr>
<small>Created at {{$customer->created_at}}</small>
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
