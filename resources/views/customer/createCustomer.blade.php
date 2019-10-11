@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Customer</title>
</head>
<body>
@section('content')
    <h2>Create Customer</h2>
    <form method="post" action="{{route('customers.store')}}" enctype="multipart/form-data">
        @csrf
        <table border="0.5px">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Ảnh</td>
                <td><input type="text" name="inputFileName" placeholder="Tên ảnh"></td>
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
