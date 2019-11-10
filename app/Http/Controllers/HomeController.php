<?php

namespace App\Http\Controllers;

use App\Service\CityServiceInterface;
use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @var ProductServiceInterface
     */
    private $productService;
    protected $cityService;

    public function __construct(ProductServiceInterface $productService, CityServiceInterface $cityService)
    {
        $this->productService = $productService;
        $this->cityService = $cityService;
    }

    public function search(Request $request){
        $search= $request->get('search');
        $products= DB::table('products')->where('name','like','%'.$search.'%')
                                              ->orWhere('price',$search)
                                              ->orWhere('species',$search)
                                              ->get();
//        dd($products);
        return view('search.list',compact('products'));
    }

    public function search_city(Request $request){
        $cities= $this->cityService->getAll();
        $search= $request->get('city_id');
        $products= DB::table('products')->where('city_id','like','%'.$search.'%')
            ->get();
        return view('search.list',compact('products','cities'));
    }

    public function search_species(Request $request){
        $cities= $this->cityService->getAll();
        $search= $request->get('species');
        $products= DB::table('products')->where('species','like','%'.$search.'%')
            ->get();
        return view('search.list',compact('products','cities'));
    }

    public function show(){
        $products=$this->productService->getAll();
        $cities= $this->cityService->getAll();
        return view('layouts.products',compact('products','cities'));
    }
    public function show_id($id){
        $products=$this->productService->show($id);
        return view('layouts.show_products.show_id_product',compact('products'));
    }
    public function listCity(){
        $citys= $this->cityService->getAll();
        return view('city.listhome',compact('citys'));
    }



}
