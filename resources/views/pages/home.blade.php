@extends('layouts.home')

@section('content')
    <script type="text/javascript" src = "{{asset('js/base/home.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/base/home.css')}}">
	<div id = "welcome-title">Welcome to Wang Xianzhe's Homepage</div>
    <div>
        <a href="{{route('help')}}">
        Need help?
        </a>
    </div>
@stop