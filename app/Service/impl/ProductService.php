<?php


namespace App\Service\impl;


//use App\Product;
use App\Product;
use App\Repository\ProductRepositoryInterface;
use App\Service\ProductServiceInterface;
use test\Mockery\ReturnTypeObjectTypeHint;

class ProductService implements ProductServiceInterface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function store($request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->hometown = $request->input('hometown');
        $product->species = $request->input('species');

        if (!$request->hasFile('inputFile')) {
            $product->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $product->image = $newFileName;
        }



        return $this->productRepository->store($product);

    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function show($id)
    {
        return $this->productRepository->show($id);
    }

    public function edit($id)
    {
        return $this->productRepository->edit($id);
    }

    public function update($id,$request)
    {
        $product =Product::findorfail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->hometown = $request->input('hometown');
        $product->species = $request->input('species');

        if (!$request->hasFile('inputFile')) {
            $product->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;
            $newFileName = "$fileName.$fileExtension";
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            $product->image = $newFileName;
        }

        return $this->productRepository->store($product);
    }

    public function delete($id)
    {
        $this->productRepository->delete($id);
    }
}
