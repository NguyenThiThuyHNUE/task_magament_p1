<?php


namespace App\Repository\impl;


use App\Bill;
use App\Repository\BillRerositoryInterface;

class BillRepository implements BillRerositoryInterface
{
    public function getAll(){
        return Bill::all();
    }

    public function findbyid($id)
    {
        return  Bill::findorfail($id);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
