<?php


namespace App\Repository\impl;


use App\Customer;
use App\Product;
use App\Repository\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{

    public function getAll()
    {
        return Customer::all();

    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($customer)
    {
        return $customer->save();
    }

    public function show($id)
    {
        return Customer::findorfail($id);
    }

    public function edit($id)
    {
        $customes=Customer::findorfail($id);
        return $customes;
    }

    public function update($id,$request)
    {
        $customers=Product::findorfail($id);
        return $customers->update($request->all());
    }

    public function delete($id)
    {
        $customers= Customer::findorfail($id);
        return $customers->delete();
    }
}
