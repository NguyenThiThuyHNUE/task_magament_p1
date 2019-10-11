@extends('layouts.app')
@section('content')
    <h1>{{'Chi tiết giỏ hàng'}}</h1>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="col-12 alert alert-success alert-block ">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('delete_error'))
        <div class="col-12 alert alert-success alert-block ">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{\Illuminate\Support\Facades\Session::get('delete_error')}}</strong>

        </div>
    @endif
    <div class="col-12 col-md-12 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:40%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:20%">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @if(\Illuminate\Support\Facades\Session::has('cart'))
                @foreach($cart->items as $product)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-md-2 hidden-xs">
                                <img src="{{asset('storage/images/'.$product['item']['Image'])}}" class="img-responsive" width="100%">
                            </div>
                            <div class="col-md-10" >
                                <h4 class="nomargin" >{{$product['item']['name']}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{number_format($product['item']['price'])}}</td>

                    <form action="{{route('cart.updateProductIntoCart',$product['item']['id'])}}" method="post">
                        @csrf
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" min="0" name="qty" value="{{ $product['qty'] }}">
                        </td>
                        <td data-th="Subtotal" class="text-center">{{number_format($product['price']).'VND'}}</td>
                        <td class="actions" data-th="">
{{--                            <button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button>--}}
                            <a class="btn btn-danger btn-sm" href="{{route('cart.removeProductIntoCart',$product['item']['id'])}}"><i class="fa fa-trash-o">Delete</i></a>
                        </td>

                    </form>
                </tr>
                @endforeach

            </tbody>
            <tfoot>
{{--            <tr class="visible-xs">--}}
{{--                <td class="text-center"><strong>Tổng tiền: ${{$cart->totalPrice}}</strong></td>--}}
{{--            </tr>--}}
            <tr>
                <td><a href="{{route('display.show')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center" ><strong>Tổng tiền: ${{$cart->totalPrice}}</strong></td>
                <td><a href="{{route('order.create')}}"  class="btn btn-success btn-block">Thanh toán<i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
            @else
                <tr>
                    <td colspan="5" class="text-center" ><p>{{'Bạn chưa mua sản phẩm nào'}}</p></td>
                </tr>
        </table>
    </div>
    @endif
@endsection


