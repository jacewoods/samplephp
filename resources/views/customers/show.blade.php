@extends('layouts.app')

@section('content')
<a href="/customers" class="btn btn-default">Return</a>
  <h1>{{$customer->firstname}} {{$customer->lastname}}</h1>
  <div>
    {{$customer->email}}
  </div>

<hr>
<small>Created at {{$customer->created_at}}</small>
@endsection
