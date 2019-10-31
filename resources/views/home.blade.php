@extends('layouts.app')

@section('content')
  <h1>Important Homepage Information!</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <hr>
  <h3>Get started by Creating a Customer!
  <small class="pull-right">
    <a href="{{ action('CustomersController@create') }}" class="btn btn-success">Create a Customer</a>
  </small>
</h3>
<hr>
<h3>View and Edit current Customer records!
<small class="pull-right">
  <a href="{{ action('CustomersController@index') }}" class="btn btn-default">View all Customers</a>
</small>
</h3>
<hr>
<h3>Search to identify existing Customer records!
<small class="pull-right">
  <a href="{{ action('CustomersController@search') }}" class="btn btn-primary">Search for Customers</a>
</small>
</h3>
@endsection

@section('sidebar')
  @parent
  <p></br>This is appended information to the Home sidebar!</p>
@endsection
