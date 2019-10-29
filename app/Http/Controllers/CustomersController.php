<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      // Create New Customer
      $customer = new Customer;
      $customer->name = $request->input('name');
      $customer->email = $request->input('email');
      $customer->message = $request->input('message');
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
