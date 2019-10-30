@extends('layouts.app')

@section('content')
  <h1>Edit a Customer</h1>
  <p><font color="red">*</font> denotes a required field</p>
</br>
  {!! Form::open(['action' => ['CustomersController@update', $customer->id], 'method' => 'POST']) !!}

<div class="form-group row">
  <div class="col-md-4">
    {{Form::label('firstname', 'First Name')}}<font color="red">*</font>
    {{Form::text('firstname', $customer->firstname, ['class' => 'form-control', 'placeholder' => 'Enter First Name'])}}
  </div>
  <div class="col-md-4">
    {{Form::label('lastname', 'Last Name')}}<font color="red">*</font>
    {{Form::text('lastname', $customer->lastname, ['class' => 'form-control', 'placeholder' => 'Enter Last Name'])}}
  </div>
  <div class="col-md-4">
    {{Form::label('email', 'Email Address')}}<font color="red">*</font>
    {{Form::text('email', $customer->email, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
  </div>
</div>

<div class="form-group row">
  <div class="col-md-6">
    {{Form::label('address1', 'Address 1')}}
    {{Form::text('address1', $customer->address1, ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
  </div>
  <div class="col-md-6">
    {{Form::label('address2', 'Address 2')}}
    {{Form::text('address2', $customer->address2, ['class' => 'form-control', 'placeholder' => 'Enter Address 2'])}}
  </div>
</div>

<div class="form-group row">
  <div class="col-md-3">
    {{Form::label('city', 'City')}}
    {{Form::text('city', $customer->city, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
  </div>
  <div class="col-md-3">
    {{Form::label('state', 'State')}}
    {{Form::text('state', $customer->state, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
  </div>
  <div class="col-md-3">
    {{Form::label('zip', 'Zip')}}
    {{Form::text('zip', $customer->zip, ['class' => 'form-control', 'placeholder' => 'Enter Zipcode'])}}
  </div>
  <div class="col-md-3">
    {{Form::label('country', 'Country')}}
    {{Form::text('country', $customer->country, ['class' => 'form-control', 'placeholder' => 'Enter Country'])}}
  </div>
</div>
  <div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  </div>
  {!! Form::close() !!}
@endsection
