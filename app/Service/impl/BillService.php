<?php


namespace App\Service\impl;


use App\Repository\BillRerositoryInterface;
use App\Service\BillServiceInterface;

class BillService implements BillServiceInterface
{
    protected $billRepositoty;
    public function __construct(BillRerositoryInterface $billRepositoty)
    {
        $this->billRepositoty=$billRepositoty;
    }

    public function getAll(){
        return $this->billRepositoty->getAll();
    }

    public function findbyid($id)
    {
        return $this->billRepositoty->findbyid($id);
    }
}
