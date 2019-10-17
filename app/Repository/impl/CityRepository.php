<?php


namespace App\Repository\impl;


use App\City;
use App\Repository\CityRepositoryInterface;

class CityRepository implements CityRepositoryInterface
{
    public $city;
    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function getAll()
    {
        return City::all();
    }

    public function show($id)
    {
       return $this->city->findOrFail($id);
    }

    public function edit($id)
    {
        $city = $this->city->findOrFail($id);
        return $city;
    }

    public function update($request, $id)
    {
        $city= $this->city->findOrFail($id);
        return $city->update($request->all());
    }

    public function store($city)
    {
        return $city->save();
    }

    public function delete($id)
    {
       $city=  $this->city->findOrFail($id);
       return $city->delete();
    }
}
