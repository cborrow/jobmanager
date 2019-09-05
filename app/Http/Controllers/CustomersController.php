<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index() {
    	$customers = Customer::paginate(50);
    	return view('customers.index', compact('customers'));
    }

    public function view(Customer $customer) {
    	return view('customers.view', compact('customer'));
    }

    public function add() {
    	return view('customers.add');
    }

    public function edit(Customer $customer) {
    	return view('customers.edit', compact('customer'));
    }

    public function delete(Customer $customer) {
    	return view('customers.delete', compact('customer'));
    }

    public function insert(Request $request) {
    	$customer = new Customer();
    	$customer->first_name = $request->firstName;
    	$customer->last_name = $request->lastName;
    	$customer->company = $request->company;
    	$customer->phone = $request->phone;
    	$customer->alt_phone = $request->altPhone;
    	$customer->email = $request->email;
    	$customer->address = $request->address;
    	$customer->city = $request->city;
    	$customer->state = $request->state;
    	$customer->zip = $request->zip;
    	$customer->notes = $request->notes;
    	$customer->save();

    	return redirect('/customers');
    }

    public function update(Request $request, Customer $customer) {
    	$customer->first_name = $request->firstName;
    	$customer->last_name = $request->lastName;
    	$customer->company = $request->company;
    	$customer->phone = $request->phone;
    	$customer->alt_phone = $request->alt_phone;
    	$customer->email = $request->email;
    	$customer->address = $request->address;
    	$customer->city = $request->city;
    	$customer->state = $request->state;
    	$customer->zip = $request->zip;
    	$customer->notes = $request->notes;
    	$customer->save();

    	return redirect('/customers/' . $customer->id);
    }

    public function purge(Request $request, Customer $customer) {
    	if($request->actually_delete == 'yes') {
    		$customer->delete();
    	}

    	return redirect('/customers');
    }

    public function getCustomer(Customer $customer) {
    	return json_encode($customer);
    }
}
