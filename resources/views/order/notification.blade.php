@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')
<body>
<table>
    <tr><h3> Cảm ơn bạn đã mua hàng  </h3></tr>
    <tr>Chúng tôi đã nhận được thông tin của bạn</tr>
    <tr><h4>Hóa đơn của bạn</h4></tr>
    <tr><img src="http://thuthuatphanmem.vn/uploads/2018/04/24/hinh-dong-dep-11_091100956.gif" width="250px"></tr>
    <tr><h3><a href="{{route('cart.index')}}" style="" >Back</a></h3></tr>
</table>



</body>
    @endsection
</html>
