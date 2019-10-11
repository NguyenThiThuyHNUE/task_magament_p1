<?php


namespace App\Repository;


interface CustomerRepositoryInterface
{
    public function getAll();
    public function create();
    public function store($request);
    public function show($id);
    public function edit($id);
    public function update($request,$id);
    public function delete($id);
}
