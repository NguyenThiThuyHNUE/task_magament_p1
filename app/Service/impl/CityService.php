<?php


namespace App\Service\impl;


use App\City;
use App\Repository\CityRepositoryInterface;
use App\Service\CityServiceInterface;

class CityService implements CityServiceInterface
{
    public $cityRepository;
    public function __construct(CityRepositoryInterface $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAll()
    {
        return $this->cityRepository->getAll();
    }

    public function show($id)
    {
        return $this->cityRepository->show($id);
    }

    public function edit($id)
    {
        return $this->cityRepository->edit($id);

    }

    public function update($request, $id)
    {
        $city= City::findOrFail($id);
        $city->name= $request->input('name');
        $city->info= $request->input('info');
        $city->save();
        return $this->cityRepository->store($city);    }

    public function store($request)
    {
        $city= new City();
        $city->name= $request->input('name');
        $city->info= $request->input('info');
        $city->save();
        return $this->cityRepository->store($city);
    }

    public function delete($id)
    {
        return $this->cityRepository->delete($id);
    }
}
