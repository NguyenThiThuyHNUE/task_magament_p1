@extends('layouts.app')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
@section('content')
<h2>Edit User </h2>
<form method="post">
{{--    <input type="hidden" name="__method" value="put">--}}
    @csrf
    {{method_field('PATCH')}}

{{--  <input type="hidden" name="_method" value="patch">--}}

    <table>

        <tr>
            <td>ID</td>
            <td><input type="text" name="id" placeholder="{{$users['id']}}"></td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="name" placeholder="{{$users['name']}}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" placeholder="{{$users['email']}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="{{route('user.edit',$users['id'])}}"><button type="submit">Edit</button></a></td>
        </tr>

    </table>

</form>
@endsection
</body>
</html>
