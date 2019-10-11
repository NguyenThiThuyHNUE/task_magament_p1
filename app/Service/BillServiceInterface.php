<?php


namespace App\Service;


interface BillServiceInterface
{
    public function getAll();
    public function findbyid($id);
}
