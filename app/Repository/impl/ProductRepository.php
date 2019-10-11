<?php


namespace App\Repository\impl;


use App\Product;
use App\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{

    public function store($product)
    {
         $product->save();
    }

    public function getAll()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::findorfail($id);

    }

    public function edit($id)
    {
       return Product::findorfail($id);
    }

    public function update($id,$request)
    {
       $products=Product::findorfail($id);

       return $products->update($request->all());
    }

    public function delete($id)
    {
        $products=Product::findorfail($id);
        return $products->delete();
    }
}
