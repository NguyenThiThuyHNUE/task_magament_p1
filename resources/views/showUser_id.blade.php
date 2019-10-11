@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User with ID</title>
</head>
<body>
@section('content')
<h2>User Details </h2>
<form>
    <table>
        <tr>
            <td>ID</td>
            <td>{{ $user['id'] }}</td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td>{{$user['name']}}</td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>{{$user['phone']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user['email']}}</td>
        </tr>
    </table>
</form>
@endsection
</body>
</html>
