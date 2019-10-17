<?php

namespace App\Http\Controllers;

use App\Service\CityServiceInterface;
use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @var ProductServiceInterface
     */
    private $cityService;

    public function __construct(CityServiceInterface $cityService)
    {
        $this->cityService= $cityService;
    }



    public function getAll(){
        $citys= $this->cityService->getAll();
        return view('city.list',compact('citys'));
    }

    public  function show($id){
        $city= $this->cityService->show($id);
        return view('city.show',compact('city'));
    }

    public function create(){
        return view('city.create');
    }

    public function store(Request $request){
        $citys = $this->cityService->store($request);
        return redirect()->route('city.list',compact('citys'));
    }

    public function edit($id){
        $citys= $this->cityService->edit($id);
        return view('city.edit',compact('citys'));
    }

    public function update(Request $request, $id){
        $citys= $this->cityService->update($request, $id);
        return redirect()->route('city.list',compact('citys'));
    }

    public function delete($id){
        $city= $this->cityService->delete($id);
        return redirect()->route('city.list');
    }

}
