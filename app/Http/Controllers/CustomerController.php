<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::orderBy('full_name')
        ->orderBy('age')->get();

        return response()->json([
            'customers' => $customers
        ]);
    }
public function store(Request $request) {
    $request->validate([
        'full_name' => 'string|required',
        'age' => 'string|required',
        'email_address' => 'string|required',
        'status' => 'string|required',
        'phone' => 'string|required',
        'credit_limit' => 'numeric|required',
    ]);
    $customer = Customer::create($request->all());

    return response()->json($customer);
}

public function update(Customer $customer, Request $request) {
    $customer->update($request->all());

    return response()->json($customer);
}

public function destroy(Customer $customer) {
    $customer->delete();
    return response()->json(['message'=>'Customer has been deleted.']);
}
}