<?php


namespace App\Service;


interface CityServiceInterface
{
    public function getAll();
    public function show($id);
    public function edit($id);
    public function update($request,$id);
    public function store($request);
    public function delete($id);
}
