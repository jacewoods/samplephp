<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required'
      ]);

      // Create New Customer
      $customer = new Customer;
      $customer->firstname = $request->input('firstname');
      $customer->lastname = $request->input('lastname');
      $customer->email = $request->input('email');
      $customer->address1 = $request->input('address1');
      $customer->address2 = $request->input('address2');
      $customer->city = $request->input('city');
      $customer->state = $request->input('state');
      $customer->zip = $request->input('zip');
      $customer->country = $request->input('country');
      // Save Message
      $customer->save();

      // Redirect
      return redirect('/')->with('success', 'Customer information submitted!');
    }

    public function getCustomers()
    {
      $customers = Customer::all();

      return view('customers')->with('customers', $customers);
    }
}
