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
  <form method="post">
      <table>
          <tr>
              <td>ID</td>
              <td>{{$profile['id']}}</td>
          </tr>
          <tr>
              <td>Name</td>
              <td>{{$profile['name']}}</td>
          </tr>
          <tr>
              <td>Email</td>
              <td>{{$profile['email']}}</td>
          </tr>
          <tr>
              <td>Password</td>
              <td>{{$profile['password']}}</td>
          </tr>
      </table>
  </form>
</body>
    @endsection

</html>
