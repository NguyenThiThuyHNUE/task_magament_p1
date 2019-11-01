@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-12">
            <div class="row">

                <h1>List City</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Tên thành phố</th>
                        <th scope="col">Giới thiệu</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($citys)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($citys as $key => $city)
                            <tr>
                                <td>{{$city['name']}}</td>
                                <td>{{$city['info']}}</td>
                                <td><a href= "{{route('city.show', $city['id'])}}"><button>Show</button></a></td>
{{--                                <td><a href= "{{route('city.edit', $city['id'])}}"><button>Edit</button></a></td>--}}
{{--                                <td> <form action="{{route('city.delete', $city['id'])}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        {{ method_field('DELETE') }}--}}
{{--                                        <a href= "" onclick="return confirm('Ban chac chan muon xoa?')">--}}
{{--                                            <button type="submit">Delete</button></a>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
{{--                <a href="{{route('city.create')}}"><button> Add City</button></a>--}}
            </div>
        </div>
    </div>
    {{--</form>--}}

@endsection



