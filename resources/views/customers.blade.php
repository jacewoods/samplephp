@extends('layouts.app')

@section('content')
  <h1>View Customers</h1>
  @if(count($customers) > 0)
    @foreach($customers as $customer)
    <h3>{{$customer->firstname}} {{$customer->lastname}}:</h3>
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
    @endforeach
  @endif
@endsection
