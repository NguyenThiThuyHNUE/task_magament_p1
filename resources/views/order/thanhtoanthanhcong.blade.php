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
    <tr><h1> {{$customers['name'].'Bạn đã thanh toán thành công'}}  </h1></tr>
    <tr><img src="http://thuthuatphanmem.vn/uploads/2018/04/24/hinh-dong-dep-11_091100956.gif" width="250px"></tr>
    <tr><h3><a href="{{route('cart.index')}}" style="" >Back</a></h3></tr>
</table>



</body>
    @endsection
</html>
