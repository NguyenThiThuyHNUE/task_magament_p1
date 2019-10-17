@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show City</title>
</head>
<body>
@section('content')
<h2>Show City</h2>
<form method="post"  enctype="multipart/form-data">
    @csrf

    <h3>{{$city['name']}}</h3>
    <br>
    <br>
    <p>{{$city['info']}}</p>

</form>
@endsection
</body>
</html>

