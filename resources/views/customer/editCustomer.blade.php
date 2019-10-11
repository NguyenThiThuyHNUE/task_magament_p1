@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Customer</title>
</head>
<body>
@section('content')
<h2>Edit Customer</h2>
<form method="post" action="{{route('customers.update',$customers['id'])}}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    <table border="0.5px">

        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="name" value="{{$customers['name']}}"></td>
        </tr>
        <tr>
            <td>Quê quán</td>
            <td><input type="text" name="address"  value="{{$customers['address']}}" ></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="number" name="phone" value="{{$customers['phone']}}"></td>
        </tr>
        <tr>
            <td>Ảnh</td>
            <td><input type="text" name="inputFileName" placeholder="Tên ảnh" ></td>
            <p><img src="{{asset('storage/images/'.$customers['image'])}}"height="200px" width="200px" ></p>

        </tr>
        <tr>
            <td></td>
            <td><input type="file" name="inputFile"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Create</button></td>
        </tr>

    </table>
</form>
@endsection
</body>
</html>

