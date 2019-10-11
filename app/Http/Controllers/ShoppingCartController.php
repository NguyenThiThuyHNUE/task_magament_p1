<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $cart= Session::get('cart');
        return view('cart.index',compact('cart'));
    }

    public function addToCart(Request $request,$productId)
    {
        $product = Product::findorfail($productId);
        if(Session::has('cart')){
            $oldCart=Session::get('cart');
        }else{
            $oldCart = null;
        }
        //khoi tao gio hang
        $cart= new Cart($oldCart);
        $cart->add($product,$product->id);

        //luu duu lieu gio hang vao session
        Session::put('cart',$cart);
        Session::flash('success','Thêm sản phẩm vào giỏ hàng thành công');
        return redirect()->back();

    }

    public function removeProductIntoCart($productId)
    {
        if(Session::has('cart')){
            $oldCart = Session::get('cart');
            if (count($oldCart->items)>0){
                $cart= new Cart($oldCart);
                $cart->remove($productId);
                Session::put('cart',$cart);
                Session::flash('sucess','Xóa sản phẩm khỏi giỏ hàng thành công ');
            }else{
                Session::flash('delete_error','Bạn chưa mua sản phẩm nào');
            }
        }else{
            Session::flash('delete_error','Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

    public function updateProductIntoCart(Request $request, $productId)
    {
        if(Session::has('cart')){
            $oldCart = Session::get('cart');
            if (count($oldCart->items)>0){
                $cart = new Cart();
                $cart->update($request, $productId);
                Session::put('cart',$cart);
                Session::flash('success','Cập nhật thành công!');
            }else{
                Session::flash('delete_error','Bạn chưa mua sản phẩm nào');
            }
        }else{
            Session::flash('delete_error','Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }
}
