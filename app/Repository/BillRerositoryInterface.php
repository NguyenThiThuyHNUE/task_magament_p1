<?php


namespace App\Repository;


interface BillRerositoryInterface
{
    public function getAll();
    public function destroy($id);
}
