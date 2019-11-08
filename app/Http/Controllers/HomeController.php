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

//    public function search_price(Request $request){
//        $search= $request->get('search');
//        $products= DB::table('products')->where('name','like','%'.$search.'%')
//            ->orWhere('price',$search)
//            ->orWhere('species',$search)
//            ->get();
//        return view('search.list',compact('products'));
//    }

    public function show(){
        $products=$this->productService->getAll();
        return view('layouts.products',compact('products'));
    }
    public function show_id($id){
        $products=$this->productService->show($id);
        return view('layouts.show_products.show_id_product',compact('products'));
    }
    public function listCity(){
        $citys= $this->cityService->getAll();
        return view('city.listhome',compact('citys'));
    }

//    public  function showcity($id){
//        $city= $this->cityService->show($id);
//        return view('city.show',compact('city'));
//    }


}
