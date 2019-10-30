@extends('layouts.app')

@section('content')

<div class="container">
@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif
<div class="row">
	<div class="col-md-6">
		<h1>Search for Customers</h1>
	</div>
	<div class="col-md-4">

	</div>
	<div class="col-md-2 text-right">
		<a href="{{ action('CustomersController@create') }}" class="btn btn-success">Create a New Customer</a>
	</div>
</div>

<form action="/search" method="get">
  <div class="input-group">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-primary">Search</button>
    </span>
    <input type="text" name="search" class="form-control">
  </div>
</form>
<hr>
<h3>Matching Customer Information:</h3>
<table class="table table-bordered">
	<thead>
		<tr>
      <th>ID</th>
			<th>Name</th>
			<th>Email</th>

		</tr>
	</thead>
	<tbody>
		@foreach($customers as $customer)
		<tr>
      <td><a href="/customers/{{$customer->id}}">{{ $customer->id}}</a></td>
      <td>{{ $customer->firstname }} {{ $customer->lastname }}</td>
      <td>{{ $customer->email }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{$customers->links()}}
</div>
@endsection
