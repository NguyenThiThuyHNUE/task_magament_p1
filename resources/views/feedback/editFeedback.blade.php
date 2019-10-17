@extends('layouts.app')
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link href = "css/bootstrap.css" rel = "stylesheet" type = "text/css"/>
    <link href="css.css" rel="stylesheet" type="text/css"/>
    <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Comment Box</title>
</head>

<style>
    #wrap{
        border: 1px solid lightgray;
        alignment-adjust: central;
        width: 1000px;
        margin-left: 50px;
        margin-top: 10px;
        box-shadow: 0 5px 0 #e6e6e6;
        padding-bottom: 50px;

    }
    h1{

        text-align: center;
    }

    h3.heading{
        margin-left: 555px;
        background-color: #fafafa;
        font-size: 25px;
        float: left;
        padding-left: 40px;
        position: relative;
        width: 405px;
        height: 40px;
        padding-top: 5px;

    }
    #upper_blank{
        border-bottom: 7px solid steelblue;
        margin-top: 40px;
        margin-right: 485px;
        width: 570px;
        padding-right: 480px;
    }
    p{
        margin-left: 5px;
        padding: 8px;
        padding-left: 20px;
    }
    #name{
        margin-left: 20px;
        box-shadow: 0 2px 0 #e6e6e6;
        height: 40px;
        padding-left: 10px;
        width: 500px;
    }
    #email{
        margin-left: 20px;
        box-shadow: 0 2px 0 #e6e6e6;
        height: 40px;
        padding-left: 10px;
        width: 500px;
    }
    #url{
        margin-left: 20px;
        box-shadow: 0 2px 0 #e6e6e6;
        height: 40px;
        padding-left: 10px;
        width: 500px;
    }
    #comment{
        margin-left: 20px;
        box-shadow: 0 2px 0 #e6e6e6;
        height: 40px;
        padding-left: 10px;
        width: 650px;
        height: 200px;
    }
    #commentSubmit{
        margin-left: 20px;
        width: 250px;
        height: 55px;
        color: white;
        font-size: 20px;
        background-color: #2c95dc;
        box-shadow: 0 3px 0 #09466f;
        margin-bottom: 30px;
        padding-left: 20px;
        border-radius: 5px;
    }
    #commentSubmit:hover {
        background-color: #09466f;

    }

    p{
        font-size: 18px;
        color: gray;
        padding-bottom: 15px;
        padding-top: 15px;
    }
    p1{
        font-size: 18px;
        padding-top: 20px;
    }

    h3.second_heading{
        margin-left: 0;
        margin-top: 30px;
        font-size: 20px;
        width: 250px;
        height: 50px;
        padding-top: 10px;
        padding-left: 55px;

    }
    #middle{
        border: 1px solid lightgray;
        width: 1000px;
        height: 200px;
        background-color: lightyellow;
        margin-left: 45px;
        text-align: left;
        margin-top: 10px;
        box-shadow: 0 2px 0 lightgray;
    }
    .blank{
        border-bottom: 7px solid steelblue;
        margin-top: 50px;
        margin-left: 50px;
        margin-right: 100px;
        width: 800px;
    }

    #inner_reply{

        margin-left: 800px;
        margin-top: 160px;
        width: 100px;
        height: 30px;
        background-color: #2c95dc;
        text-align: center;
        font-size: 18px;
        color: white;
        border-radius: 18px;
    }
</style>
@section('content')
    <body>
    <!------------container------->
    <div class="container">

        <h1>Edit Comment</h1>
        <!-------Wrap------------>
        <div id="wrap">

            <div id='form'>
                <div class="row">
                    <div class="col-md-12">

                        <form method="post" action="{{route('feedbacks.update',$feedback->id)}}"  id="commentform">
                            @csrf
                            {{method_field('PATCH')}}

                            <div id="comment-name" class="form-row">
                                <input type = "text" placeholder = "Name (required)" name = "name"  id = "name"
                                       @if($feedback->customer_id != null)
                                       value="{{$feedback->customer['name']}}"
                                       @else
                                            value="{{$feedback->name_user}}"
                                       @endif
                                >
                            </div>
                            <div id="comment-message" class="form-row">
                                <textarea name = "content" placeholder = "Message" id = "comment">{{$feedback->content}}</textarea>
                            </div>
                            <a href=""><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment"></a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    </body>
@endsection
</html>

