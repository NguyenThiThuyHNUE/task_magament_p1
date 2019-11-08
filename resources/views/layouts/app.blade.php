<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('display.show')}}">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{route('products.index')}}">Trang chủ <span class="sr-only">(current)</span></a>--}}
{{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quản lý
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('products.index')}}">Thông tin sản phẩm</a>
                    <a class="dropdown-item" href="{{route('user.index')}}">Thông tin người dùng </a>
                    <a class="dropdown-item" href="{{route('city.list')}}">Thông tin thành phố</a>
                    <a class="dropdown-item" href="{{route('feedbacks.index')}}">Thông tin phản hồi</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Địa điểm
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                    @foreach($cities as $city)--}}
                    <a class="dropdown-item" href="#" >Thái Bình</a>
                    <a class="dropdown-item" href="#" >Nam Định</a>
                    <a class="dropdown-item" href="#" >Hà Nội</a>
                    <a class="dropdown-item" href="#" >Hà Giang</a>
                    <a class="dropdown-item" href="#" >Tuyên Quang</a>
                    <a class="dropdown-item" href="#" >Cao Bằng</a>
{{--                    @endforeach--}}
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thể loại
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bánh kẹo</a>
                    <a class="dropdown-item" href="#">Thực phẩm</a>
                    <a class="dropdown-item" href="#">Đồ uống</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Giá
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"> Nhỏ hơn 1.000.000 VND</a>
                    <a class="dropdown-item" href="#">1.000.000 VND - 10.000.000 VND</a>
                    <a class="dropdown-item" href="#">Lớn hơn 10.000.000 VND</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('info.city')}}">Thành phố</a>
            </li>

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link " href="{{route('user.index')}}" tabindex="-1" aria-disabled="true">Thông tin người dùng</a>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link " href="{{route('bill.index')}}" tabindex="-1" aria-disabled="true">Thông tin hóa đơn</a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="{{route('feedbacks.index')}}" tabindex="-1" aria-disabled="true">Ý kiến khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('cart.index')}}" tabindex="-1" aria-disabled="true">
                    <div class="nav-link ">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqgSNoDwLQaHzJCepXz5FdFUQMJaOZR2uGB-n2ukQ0g52vu5Xl" width="50px">
                        <span style="color: #3f9ae5">Cart: @if(\Illuminate\Support\Facades\Session::has('cart'))
                                {{\Illuminate\Support\Facades\Session::get('cart')->totalQty}}@endif
                        </span>
                    </div>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('product.search')}}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Product" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <p></p>
</nav>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{route('profile.show')}}">Thông tin người dùng</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <a id="navbarDropdown"  >
                                <form action="{{route('change.language','lang')}}" method="post" >
                                    @csrf
                                    <select onchange="this.form.submit()" name="lang">
                                        <option value="">Ngôn ngữ</option>
                                        <option value="vi">Vi</option>
                                        <option value="en">En</option>
                                    </select>
                                </form>
                            </a>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
