@extends('layouts.admin')
@section('content')
admin profile>>
<style>
  @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400";
body,
.badgescard,
.firstinfo {
    display: flex;
    justify-content: center;
    align-items: center;
}

html {
    height: 100%;
}

body {
    font-family: 'Open Sans', sans-serif;
    width: 100%;
    min-height: 100%;
    background: #00bcd4;
    font-size: 16px;
    overflow: hidden;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

.content {
    position: relative;
    animation: animatop 0.9s cubic-bezier(0.425, 1.14, 0.47, 1.125) forwards;
}

.card {
    width: 1000px;
    min-height: 100px;
    padding: 20px;
    border-radius: 3px;
    background-color: white;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    position: relative;
    overflow: hidden;
}

.card:after {
    content: '';
    display: block;
    width: 250px;
    height: 300px;
    background: cadetblue;
    position: absolute;
    animation: rotatemagic 0.75s cubic-bezier(0.425, 1.04, 0.47, 1.105) 1s both;
}

.badgescard {
    padding: 10px 20px;
    border-radius: 3px;
    background-color: #00bcd4;
    color:#fff;
    width: 980px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    position: absolute;
    z-index: -1;
    left: 10px;
    bottom: 10px;
    animation: animainfos 0.5s cubic-bezier(0.425, 1.04, 0.47, 1.105) 0.75s forwards;
}

.badgescard span {
    font-size: 1.6em;
    margin: 0px 6px;
    opacity: 0.6;
}

.firstinfo {
    flex-direction: row;
    z-index: 2;
    position: relative;
}

.firstinfo img {
    border-radius: 50%;
    width: 120px;
    height: 120px;
}

.firstinfo .profileinfo {
    padding: 0px 20px;
}

.firstinfo .profileinfo h1 {
    font-size: 1.8em;
}

.firstinfo .profileinfo h3 {
    font-size: 1.2em;
    color: #00bcd4;
    font-style: italic;
}

.firstinfo .profileinfo p.bio {
    padding: 10px 0px;
    color: #5A5A5A;
    line-height: 1.2;
    font-style: initial;
}

@keyframes animatop {
    0% {
        opacity: 0;
        bottom: -500px;
    }
    100% {
        opacity: 1;
        bottom: 0px;
    }
}

@keyframes animainfos {
    0% {
        bottom: 10px;
    }
    100% {
        bottom: -42px;
    }
}

@keyframes rotatemagic {
    0% {
        opacity: 0;
        transform: rotate(0deg);
        top: -24px;
        left: -253px;
    }
    100% {
        transform: rotate(-50deg);
        top: -24px;
        left: -78px;
    }
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
    <div class="card">
        <div class="firstinfo"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" />
            <div class="profileinfo">
                <h1>{{auth()->user()->fname}} {{auth()->user()->name}} </h1>
                <div >
                    <h6>Email</h6>
                    <p class="text-muted">{{auth()->user()->email}}</p>
                  </div>
                  <div >
                    <h6>Address</h6>
                    <p class="text-muted">{{auth()->user()->address}}</p>
                  </div>
                  <div >
                    <h6>City</h6>
                    <p class="text-muted">{{auth()->user()->city}}</p>
                  </div>
                  <div >
                    <h6></h6>
                    <p class="text-muted">{{auth()->user()->nic}}</p>
                 
                </div>
            </div>
        </div>
    </div>
    <div class="badgescard"> 
        <span class="fa fa-facebook"></span>
        <span class="fa fa-twitter"> </span>
        <span class="fa fa-google-plus"></span>
        <span class="fa fa-youtube"></span>
        <span class="fa fa-dribble"></span>
        <span class="fa fa-google"></span>
        <span class="fa fa-android"> </span>
    </div>
</div>

@endsection
<br>