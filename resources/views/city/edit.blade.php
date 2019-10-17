@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit City</title>
</head>
<body>
@section('content')
<h2>Edit City</h2>
<form method="post" action="{{route('city.update',$citys['id'])}}" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    <table border="0.5px">

        <tr>
            <td>Tên thành phố</td>
            <td><input type="text" name="name" value="{{$citys['name']}}"></td>
        </tr>
        <tr>
            <td>Giới thiệu</td>
            <td><input type="text" name="info"  value="{{$citys['info']}}" ></td>
        </tr>
            <td></td>
            <td><button type="submit">Create</button></td>
        </tr>

    </table>
</form>
@endsection
</body>
</html>

