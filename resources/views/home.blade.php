@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chào bạn đến với gian hàng quà quê!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Đây là chỗ hiển thị hàng nhưng chưa làm đến....
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
