@extends('layouts.app')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@section('content')
<div class="container">
    <h2 class="text-center">Ý kiến khách hàng</h2>
    @foreach($feedbacks as $feedback)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
{{--                    <img src="{{asset('storage/images/'.$feedback->customer['image'])}}" class="img img-rounded img-fluid" width="100px"/>--}}
                    <p class="text-secondary text-center">{{date('Y:M:D')}}</p>
                </div>
                <div class="col-md-10">
                    <p>
                        <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html">
                            @if($feedback->customer_id != null)
                            <strong>{{$feedback->customer['name']}}</strong>
                            @else
                                <strong>{{$feedback->name}}</strong>
                            @endif
                        </a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                    </p>
                    <div class="clearfix"></div>
                    <p>{{$feedback['content']}}</p>
                    <p>
                        <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                        <a class="float-right btn btn-outline-primary ml-2" href="{{route('feedbacks.edit',$feedback->id)}}"> <i class=""></i> Edit</a>

                                <form action="{{route('feedbacks.destroy',$feedback->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <a  ><button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="float-right btn btn-outline-primary ml-2" >Delete</button></a>
                    </form>

                        <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    </p>
                </div>
            </div>
{{--            <div class="card card-inner">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-2">--}}
{{--                            <img src="https://image.talentnetwork.vn/tripath//job/image/2019/04/05/1554466288_admin-la-gi.jpg" class="img img-rounded img-fluid" width="50px"/>--}}
{{--                            <p class="text-secondary text-center">{{date('Y:M:D')}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10">--}}
{{--                            <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Admin</strong></a></p>--}}
{{--                            <p>ok</p>--}}
{{--                            <p>--}}
{{--                                <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>--}}
{{--                                <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

        @endforeach
    <a href="{{route('feedbacks.create')}}"><button>Add Comment</button></a>
</div>
@endsection
