@extends('app')

@section('content')
    <div class="container">
            <div class="title">TheDevGrind.com</div>
            <div class="quote">{{ Inspiring::quote() }}</div>
    </div>
@stop
