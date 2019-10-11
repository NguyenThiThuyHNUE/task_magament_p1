<?php


namespace App\Service;


interface CustomerServiceInterface
{
    public function getAll();
    public function create();
    public function store($request);
    public function show($id);
    public function edit($id);
    public function update($id,$request);
    public function delete($id);

}
