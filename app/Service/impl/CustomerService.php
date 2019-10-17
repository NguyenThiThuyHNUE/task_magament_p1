<?php


namespace App\Service\impl;


use App\Customer;
use App\Repository\CustomerRepositoryInterface;
use App\Service\CustomerServiceInterface;
use DemeterChain\C;

class CustomerService implements CustomerServiceInterface
{
    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var CustomerServiceInterface
     */

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($request)
    {
        $customer= new Customer();
        $customer->name= $request->input('name');
        $customer->address= $request->input('address');
        $customer->phone= $request->input('phone');
        if (!$request->hasFile('inputFile')){
            $request->image=$request->inputFile;
        }else{
            $file=$request->file('inputFile');
            $filExtenxion= $file->getClientOriginalExtension();
            $fileName= $request-> inputFileName;
            $newFileName = "$fileName.$filExtenxion";
            $request->file('inputFile')->storeAs('public/images',$newFileName);
            $customer->image= $newFileName;
        }
        return $this->customerRepository->store($customer);



    }

    public function show($id)
    {
        return $this->customerRepository->show($id);
    }

    public function edit($id)
    {
        return $this->customerRepository->edit($id);
    }

    public function update($id,$request)
    {
        $customer=Customer::findorfail($id);
        $customer->name= $request->input('name');
        $customer->address= $request->input('address');
        $customer->phone= $request->input('phone');
        if (!$request->hasFile('inputFile')){
            $request->image=$request->inputFile;
        }else{
            $file=$request->file('inputFile');
            $filExtenxion= $file->getClientOriginalExtension();
            $fileName= $request-> inputFileName;
            $newFileName = "$fileName.$filExtenxion";
            $request->file('inputFile')->storeAs('public/images',$newFileName);
            $customer->image= $newFileName;
        }
        return $this->customerRepository->store($customer);

    }

    public function delete($id)
    {
        return $this->customerRepository->delete($id);
    }
}
