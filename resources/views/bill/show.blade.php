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
<h2>Thông tin hóa đơn</h2>
<form >
    <table border="1px">

        <tr>
            <th>Mã hóa đơn</th>
            <th>Tên khách hàng</th>
            <th>Tổng tiền</th>
            <th>Số lượng sản phẩm</th>
            <th></th>
        </tr>
        @foreach($bills as $bill)
        <tr>
            <th>{{$bill['id']}}</th>
            <th>{{$bill->customer['name']}}</th>
            <th>{{$bill['total']}}</th>
            <th>{{$bill->products->count()}}</th>
            <th><a href="{{route('bill.show',$bill['id'])}}">Chi tiết hóa đơn</a></th>
        </tr>
            @endforeach
    </table>
</form>
@endsection
</body>
</html>
