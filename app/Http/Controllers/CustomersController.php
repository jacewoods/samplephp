<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->paginate(3);
        return view('customers.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
      return redirect('/customers')->with('success', 'Customer information submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required'
      ]);
      // Edit Customer
      $customer = Customer::find($id);
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
      return redirect('/customers')->with('success', 'Customer information updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customers')->with('error', 'Customer Deleted');
    }
}
