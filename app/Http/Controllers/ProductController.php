<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Product;
use App\Service\CityServiceInterface;
use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productService;
    protected $cityService;
    public function __construct(ProductServiceInterface $productService, CityServiceInterface $cityService)
    {
        $this->productService = $productService;
        $this->cityService= $cityService;
        $this->middleware('auth');
    }
    public function index()
    {
        $products= $this->productService->getAll();
        return view('product.list',compact('products'));

    }

    public function create()
    {
        $cities= $this->cityService->getAll();
        return view('product.createProduct',compact('cities'));

    }


    public function store(CreateProductRequest $request)
    {
        $products= $this->productService->store($request);
        return redirect()->route('products.index',compact('products'));

    }


    public function show($id)
    {
        $products = $this->productService->show($id);
        return view('product.showProduct',compact('products'));
    }


    public function edit($id)
    {
        $products=$this->productService->edit($id);
        $cities= $this->cityService->getAll();
        return view('product.editProduct', compact('products','cities'));
    }


    public function update(Request $request, $id)
    {
        $products= $this->productService->update($id,$request);
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $products=$this->productService->delete($id);
        return redirect()->route('products.index');
    }
}
