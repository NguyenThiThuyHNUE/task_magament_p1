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
<body>
@section('content')
<h2>Create User</h2>
<form method="post" action="{{route('user.store')}}">
    @csrf
    <table border="0.5px">
        <tr>
            <td>Ho va ten: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
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
