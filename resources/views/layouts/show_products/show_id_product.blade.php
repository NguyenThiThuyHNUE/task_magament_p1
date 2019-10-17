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
    <form>
        <table border="1px">
            <tr>
                <th> Tên sản phẩm</th>
                <th> Price </th>
                <th> Hometown </th>
                <th> Species </th>
                <th> Image </th>
            </tr>
            <tr>
                <td>{{$products['name']}}</td>
                <td>{{$products['price']}}</td>
                <td>{{$products->city['name']}}</td>
                <td>{{$products['species']}}</td>
                <td><img src="{{asset('images/'.$products['Image'])}}"height="50px" width="150px" ></td>
            </tr>


        </table>
        <p>{{$products['info']}}}</p>
    </form>
    </body>
@endsection
</html>
