<?php


namespace App\Repository;


interface ProductRepositoryInterface
{
    public function getAll();
    public function store($product);
    public function show($id);
    public function edit($id);
    public function update($id,$request);
    public function delete($id);
}
