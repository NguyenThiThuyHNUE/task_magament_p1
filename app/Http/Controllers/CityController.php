<?php

namespace App\Http\Controllers;

use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * @var ProductServiceInterface
     */
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function listCity(){
        $citys= $this->productService->getAll();
        dd($citys);
        return view('layouts.products',compact('citys'));
    }

}
