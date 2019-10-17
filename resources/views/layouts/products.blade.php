@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hương nhà quà quê</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Indie Flower&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!--Choco bar Theme CSS style -->
    <link href="../../css/products.css" rel="stylesheet">

    <link rel="stylesheet" href="../../css/animate.css">





</head>
@section('content')
    <body >

<!-- Special Products section starts-->
<div class="section outdiv" id="specialities">
    <div class="container">
        <div class="col-md-12"><h1 class="text-center wow pulse"><span>Hương nhà quà quê</span></h1>
            <p class="sub-headers text-center">Chào bạn đến với gian hàng quà quê!!!</p>


            <div class="speciality wow fadeIn" data-wow-delay="0.6s">

            @if(count($products)==0)
                <p>Không có dữ liệu</p>
             @else
                @foreach($products as $product)

                <div class="spe-prods">
                    <div class="mainbox">
                        <h3>{{$product['name']}}</h3>
                       <a href="{{route('display.show_id',$product['id'])}}"><img class="rotprod" src="{{asset('images/'.$product['Image'])}}"></a>
                    </div>
                    <div class="price-big">
                        <div>
                            <div class="floatting-price">
                                <h3>{{number_format($product['price']) }}</h3>
                            </div>
                            <div class="month">
                                <p>{{$product->city['name']}}</p>

                            </div>
                        </div>
                        <div class="ordersection">
                            <a href="{{ route('cart.addToCart', $product['id']) }}" class="buybtn">@lang('product.Order')</a>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif


{{--                <div class="spe-prods">--}}
{{--                    <div class="mainbox">--}}
{{--                        <h3>Special 2</h3>--}}
{{--                        <img class="rotprod"  src="http://image.vovworld.vn/w500/Uploaded/vovworld/qosrgt/2016_09_23/cay.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="price-big">--}}
{{--                        <div>--}}
{{--                            <div class="floatting-price">--}}
{{--                                <h3>$30</h3>--}}
{{--                            </div>--}}
{{--                            <div class="month">--}}
{{--                                <customerService> / 6 piece</customerService>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <div class="ordersection">--}}
{{--                            <a href="#" class="buybtn">Order</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="spe-prods">--}}
{{--                    <div class="mainbox">--}}
{{--                        <h3>Special 3</h3>--}}
{{--                        <img class="rotprod" src="http://image.vovworld.vn/w500/Uploaded/vovworld/qosrgt/2016_09_23/cay.jpg" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="price-big">--}}
{{--                        <div>--}}
{{--                            <div class="floatting-price">--}}
{{--                                <h3>$60</h3>--}}
{{--                            </div>--}}
{{--                            <div class="month">--}}
{{--                                <customerService> / Dozen</customerService>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="ordersection">--}}
{{--                            <a href="#" class="buybtn">Order</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

</div>

<!--Special Products Ending here -->




<!-- Required JavaScript libraris collection -->
<!--The jQuery library from local-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap library from local -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- In own hosting -->
<!-- <script src="js/wow.min.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    //Initializing WOW aninations
    new WOW().init();
</script>

</body>
@endsection
</html>
