@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit Product</title>
</head>
@section('content')
<body>
<br>
<h2>Edit Product</h2>
<br>

<form style="width:500px;" method="post" action="{{route('products.update',$products['id'])}}" enctype="multipart/form-data">
    {{ method_field('PATCH') }}

    @csrf

    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" name="name" placeholder='' value="{{$products['name']}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" name="price" id="exampleInputPassword1" value="{{number_format($products['price'])}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Hometown</label>
        <select name="city_id">
            <option value="{{$products->city['name']}}">{{$products->city['name']}}</option>
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Species</label>
        <select name="species">
            <option value="{{$products['species']}}">{{$products['species']}}</option>
            <option value="Thực phẩm">Thực phẩm</option>
            <option value="Đồ uống">Đồ uống</option>
            <option value="Bánh kẹo">Bánh kẹo</option>
        </select>
    </div>

    <div class="form-group">
        <label for="inputFileName">Image</label>
        <p><img src="{{asset('storage/images/'.$products['Image'])}}"height="50px" width="150px" ></p>
        <input type="text"
               class="form-control"
               id="inputFileName"
               name="inputFileName" >
        <input type="file"
               class="form-control-file"
               id="inputFile"
               name="inputFile">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Info</label>
        <textarea type="text" class="form-control" name="info" id="exampleInputPassword1" >{{$products['info']}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
    @endsection
</html>
