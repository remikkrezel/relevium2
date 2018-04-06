@extends('master')

@section('style')
<link rel="stylesheet" href="css/homepage/homepage.css">
<link rel="stylesheet" href="css/homepage/nav.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

@endsection

@section('content')



<header class="homepage">
    <div class="container-fluid">
        <div class="d-flex">
            <div class="p-2">
                <div class="logo">
                    <a href="#" class="font-homepage">Relevium</a>
                </div>
            </div>
            <div class="ml-auto p-2">
                <i class="hamburger fas fa-bars fa-2x"></i>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="logo">--}}
                {{--<a href="#" class="font-homepage">Relevium</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="centered">
                <h1 class="name">A place where your files will feel sheltered</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4"><a href="/image-gallery" class="btn btn-sm animated-button victoria-two">Store Images</a></div>
                        <div class="col-md-4"><a href="/image-gallery" class="btn btn-sm animated-button victoria-two">Send Mail</a></div>
                        <div class="col-md-4"><a href="/image-gallery" class="btn btn-sm animated-button victoria-two">Send SMS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@endsection