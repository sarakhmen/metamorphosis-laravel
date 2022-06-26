@extends('layout')

@section('title', 'Метаморфоза - сторінка контейнер')

@section('stylesheets')
<link rel="stylesheet" href="./css/container.css" />
@parent
@endsection

@section('header')
@include('header', ['pageName'=>'container'])
@endsection

@section('main')
<div class="main">
    <div class="classes">
        <ul>
            @foreach ($exercises as $exercise)
            <li>
                <img src="{{$exercise->image_url}}"/>
                <div class="class-description">
                    <h3>{{$exercise->name}}</h3>
                    <h4>{{$exercise->description}}</h4>
                </div>
            </li>
            @endforeach
        </ul>
        <button>Перейти до запису</button>
    </div>
</div>
@endsection

<!--@section('scripts')-->
<!--@parent-->
<!--<script src="./js/coaches-carousel.js"></script>-->
<!--<script src="./js/reviews-carousel.js"></script>-->
<!--@endsection-->




















