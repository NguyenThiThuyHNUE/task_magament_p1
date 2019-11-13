@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('send.mail')}}">
        @csrf
        <h2>This is Mail</h2>
        <table>
            <tr>
                <td>Subject</td>
                <td><input type="text" name="subject" id="subject"></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><input type="text" name="message" id="message"></td>
            </tr>
            <tr>
                <td></td>
                <td><button  type="submit">Send Mail</button></td>
            </tr>
        </table>
    </form>
    @endsection

