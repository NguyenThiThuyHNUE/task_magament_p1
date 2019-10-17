@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-12">
            <div class="row">

                <h1>List Customer</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Quê quán</th>
                        <th scope="col">Số điện thoại</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($customers)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($customers as $key => $customer)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$customer['name']}}</td>
                                <td>{{$customer['address']}}</td>
                                <td>{{$customer['phone']}}</td>
                                <td><img src="{{asset($customer['image'])}} "width="200px" height="200px"></td>
                                <td><a href= "{{route('customers.show', $customer['id'])}}"><button>Show</button></a></td>
                                <td><a href= "{{route('customers.edit', $customer['id'])}}"><button>Edit</button></a></td>
                                <td> <form action="{{route('customers.destroy', $customer['id'])}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <a href= "" onclick="return confirm('Ban chac chan muon xoa?')">
                                            <button type="submit">Delete</button></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <a href="{{route('customers.create')}}"><button> Add Customer</button></a>
            </div>
        </div>
    </div>
    {{--</form>--}}

@endsection



