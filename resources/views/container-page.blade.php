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
            <li>
                <img src="./img/rope-exercises.png" />
                <div class="class-description">
                    <h3>Вправи на канаті</h3>
                    <h4>Пн. та Вт., 12:00 - 15:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/acrobatics.png" />
                <div class="class-description">
                    <h3>Акробатичні трюки</h3>
                    <h4>Сб. та Нд., 9:00 - 12:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/cardio.png" />
                <div class="class-description">
                    <h3>Кардіо схема</h3>
                    <h4>Вт. та Чт., 18:00 - 20:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/powerliftings.png" />
                <div class="class-description">
                    <h3>Пауерліфтинг</h3>
                    <h4>Пн. та Сб., 16:00 - 20:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/gymnastics.png" />
                <div class="class-description">
                    <h3>Гімнастика</h3>
                    <h4>Пн., Ср та Пт., 14:00 - 16:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/arm.png" />
                <div class="class-description">
                    <h3>Армреслінг</h3>
                    <h4>Пн. - Пт. 19:00 - 20:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/bodybuilding.png" />
                <div class="class-description">
                    <h3>Бодібілдинг</h3>
                    <h4>Пн. - Сб. 17:00 - 19:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/boxing.png" />
                <div class="class-description">
                    <h3>Бокс</h3>
                    <h4>Вт., Чт. та Сб. 15:00 - 17:00</h4>
                </div>
            </li>
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




















