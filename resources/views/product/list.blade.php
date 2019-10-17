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
<div class="container">
    <div class="col-12">
        <div class="row">

            <h1>List products</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Price</th>
                    <th scope="col">Hometown</th>
                    <th scope="col">Species</th>
                    <th scope="col">Image</th>
                    <th scope="col">Info</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($products)==0)
                    <tr>
                        <td colspan="4">Khong co du lieu</td>
                    </tr>
                @else
                    @foreach($products as $key => $product)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product->city['name']}}</td>
                            <td>{{$product['species']}}</td>
                            <td><img src="{{asset('images/'.$product['Image'])}}"height="50px" width="150px" ></td>
                            <td>{{$product['info']}}</td>
                            <td><a href= "{{route('products.show', $product['id'])}}"><button>Show</button></a></td>
                            <td><a href= "{{route('products.edit', $product['id'])}}"><button>Edit</button></a></td>
                            <td> <form action="{{route('products.destroy', $product['id'])}}" method="post">
                                    @csrf
                                {{ method_field('DELETE') }}
                                <a href= "" onclick="return confirm('Ban chac chan muon xoa?')">
                                    <button type="submit">Delete</button></a>
                            </form></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a href="{{route('products.create')}}"><button> Add Product</button></a>
        </div>
    </div>
</div>

</body>
@endsection
</html>
