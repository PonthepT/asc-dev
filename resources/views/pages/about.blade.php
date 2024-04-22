@extends('layout')

@section('title')
    ASC - About
@endsection

@section('content')
    <div class="container">
        <h1 class="about_title">This is About</h1>
        <img class="about_image" src="{{ asset('/public/images/aboutus.png') }}" alt="aboutus">
    </div>
@endsection

@section('styles')
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            .about_title {
                color: blue;
            }
            .about_image {
                height: 300px;
            }
        }
    </style>
@endsection
