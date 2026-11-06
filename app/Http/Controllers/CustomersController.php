<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
        ]);

        return redirect()->route('customers');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.show', ['customer' => $customer]);
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $customer->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
        ]);

        return redirect()->route('customers');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers')->with('success', 'Customer deleted successfully.');
    }
}
