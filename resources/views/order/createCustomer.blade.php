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
    <form method="post" action="{{route('order.store')}}" enctype="multipart/form-data">
        @csrf
        <table >
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="name"></td>
                <td>@if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif</td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="address"></td>
                <td>@if($errors->has('address'))
                        <span class="text-danger">{{$errors->first('address')}}</span>
                    @endif</td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="number" name="phone"></td>
                <td>@if($errors->has('phone'))
                        <span class="text-danger">{{$errors->first('phone')}}</span>
                    @endif</td>
            </tr>
            <tr>
                <td>Ảnh</td>
                <td><input type="text" name="inputFileName" placeholder="Tên ảnh"></td>

            </tr>
            <tr>
                <td></td>
                <td><input type="file" name="inputFile"></td>
                <td>@if($errors->has('inputFile'))
                        <span class="text-danger">{{$errors->first('inputFile')}}</span>
                    @endif</td>
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

