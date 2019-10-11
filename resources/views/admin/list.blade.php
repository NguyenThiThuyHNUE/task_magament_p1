@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-12">
        <div class="row">

            <h1>List Users</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ten nguoi dung</th>
                    <th scope="col">Ngay sinh</th>
                    <th scope="col">Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($users)==0)
                    <tr>
                        <td colspan="4">Khong co du lieu</td>
                    </tr>
                 @else
                    @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['date']}}</td>
                        <td>{{$user['email']}}</td>
                        <td><a href= "{{route('user.show', $user['id'])}}"><button>Show</button></a></td>
                        <td><a href= "{{route('user.edit', $user['id'])}}"><button>Edit</button></a></td>
                        <td><a href= "{{route('user.delete', $user['id'])}}" onclick="return confirm('Ban chac chan muon xoa?')"><button>Delete</button></a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <a href="{{route('user.create')}}"><button> Add User</button></a>
        </div>
    </div>
</div>
{{--</form>--}}

@endsection


