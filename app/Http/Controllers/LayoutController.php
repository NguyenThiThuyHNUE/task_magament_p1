<?php

namespace App\Http\Controllers;

use App\Service\CityServiceInterface;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    protected $cityService;
    public function __construct(CityServiceInterface $cityService)
    {
        $this->cityService = $cityService;
    }
    public function listCity(){
        $cities = $this->cityService->getAll();
        return view('layouts.app',compact('cities'));
    }
}
