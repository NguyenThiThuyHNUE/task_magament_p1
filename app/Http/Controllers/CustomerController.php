<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Service\CustomerServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    private $customerService;

    public function __construct(CustomerServiceInterface $customerService)
    {
        $this->customerService = $customerService;
        $this->middleware('auth');
    }


    public function index()
    {
        $customers = $this->customerService->getAll();
        return view('customer.list', compact('customers'));
    }


    public function create()
    {
        return view('customer.createCustomer');
    }


    public function store(Request $request)
    {
       $customers= $this->customerService->store($request);
       return redirect()->route('customers.index',compact('customers'));

    }


    public function show($id)
    {
        $customers=$this->customerService->show($id);
        return view('customer.showCustomer',compact('customers'));
    }


    public function edit($id)
    {
        $customers= $this->customerService->edit($id);
        return view('customer.editCustomer',compact('customers'));
    }


    public function update(Request $request, $id)
    {
        $customers=$this->customerService->update($id,$request);
        return redirect()->route('customers.index');
    }


    public function destroy($id)
    {
        $customers=$this->customerService->delete($id);
        return redirect()->route('customers.index');
    }
}
