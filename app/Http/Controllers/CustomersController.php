<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index() {
    	/*$customers = Customer::paginate(30);
    	return view('customers.index', compact('customers'));*/

        return view('customers.index');
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
    	addCustomer($request);
    	return redirect('/customers');
    }

    public function update(Request $request, Customer $customer) {
    	updateCustomer($request, $customer);
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

    public function addCustomer(Request $request) {
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
    	$customer->note = $request->notes;
    	if($customer->save()) {
    		return json_encode(['status' => 'true']);
    	}
    	return json_encode(['status' => 'false']);
    }

    public function updateCustomer(Request $request, Customer $customer) {
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
    	$customer->note = $request->notes;
    	if($customer->save()) {
    		return json_encode(['status' => 'true', 'customer' => $customer->id]);
    	}
    	return json_encode(['status' => 'false', 'customer' => $customer->id]);
    }
}
