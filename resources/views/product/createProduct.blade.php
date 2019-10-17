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


    <title>Add Product</title>
</head>
@section('content')
<body>

<h2> Create Product</h2>

<form style="width:500px;" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" name="name" placeholder=''>
        @if($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
        @endif

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="">
        @if($errors->has('price'))
            <span  class="text-danger">{{$errors->first('price')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Hometown</label>
{{--        <input type="text" class="form-control" name="city_id" id="exampleInputPassword1" placeholder="">--}}
        <select name="city_id">
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
        @if($errors->has('city_id'))
            <span  class="text-danger">{{$errors->first('city_id')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Species</label>
        <input type="text" class="form-control" name="species" id="exampleInputPassword1" placeholder="">
        @if($errors->has('species'))
            <span  class="text-danger">{{$errors->first('species')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="inputFileName">Image</label>
        <input type="text"
               class="form-control"
               id="inputFileName"
               name="inputFileName">
        @if($errors->has('inputFileName'))
            <span  class="text-danger">{{$errors->first('inputFileName')}}</span>
        @endif
        <input type="file"
               class="form-control-file"
               id="inputFile"
               name="inputFile">
            @if($errors->has('inputFile'))
                <span  class="text-danger">{{$errors->first('inputFile')}}</span>
            @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Info</label>

        <label for="editor1"></label><textarea name="info" id="info" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    CKEDITOR.replace( 'info' );
</script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
@endsection
</body>
</html>
