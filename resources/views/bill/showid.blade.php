@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết hóa đơn</title>
</head>
@section('content')
<body>
    <form>
        <table border="1">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Ảnh</th>
            </tr>
            @foreach($bills->products as $bill)
            <tr>
                <td>{{$bill->name}}</td>
                <td>{{$bill->price}}</td>
                <td><img src="{{asset('storage/images/'.$bill->Image)}}" width="200px" height="200px"></td>
            </tr>
          @endforeach
        </table>
    </form>
</body>
@endsection
</html>
