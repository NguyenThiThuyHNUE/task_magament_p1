<?php


namespace App\Repository;


interface CityRepositoryInterface
{
    public function getAll();
    public function show($id);
    public function edit($id);
    public function update($request,$id);
    public function store($request);
    public function delete($id);
}
