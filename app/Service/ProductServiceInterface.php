<?php


namespace App\Service;


interface ProductServiceInterface
{
    public function getAll();
    public function store($request);
    public function show($id);
    public function edit($id);
    public function update($id,$request);
    public function delete($id);
}
