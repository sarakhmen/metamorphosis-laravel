@extends('layout')

@section('title', 'Метаморфоза - головна сторінка')

@section('stylesheets')
    <link rel="stylesheet" href="./css/landing.css" />
    @parent
@endsection

@section('header')
    @include('header', ['pageName'=>'landing'])
@endsection

@section('main')
<div class="main">
    <h2>Заняття</h2>
    <div class="classes">
        <ul>
            <li>
                <img src="./img/rope-exercises.png"/>
                <div class="class-description">
                    <h3>Вправи на канаті</h3>
                    <h4>Пн. та Вт., 12:00 - 15:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/acrobatics.png"/>
                <div class="class-description">
                    <h3>Акробатичні трюки</h3>
                    <h4>Сб. та Нд., 9:00 - 12:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/cardio.png"/>
                <div class="class-description">
                    <h3>Кардіо схема</h3>
                    <h4>Вт. та Чт., 18:00 - 20:00</h4>
                </div>
            </li>
            <li>
                <img src="./img/powerliftings.png"/>
                <div class="class-description">
                    <h3>Пауерліфтинг</h3>
                    <h4>Пн. та Сб., 16:00 - 20:00</h4>
                </div>
            </li>
        </ul>
        <button>Всі заняття</button>
    </div>

    <div class="about-gym">
        <div class="centered">
            <h3>Про спортивний зал</h3>
            <p>Досягати результатів, не докладаючи великих зусиль, ‒ примарна надія. Тільки важкі тренування з
                досвідченими
                тренерами та постійний контроль свого раціону зроблять з нещасної гусениці справжнього метелика.
                Метаморфоза ‒
                це не просто метафора. Це шлях, який змушений пройти кожен, хто наважився записатися в наш зал.</p>
        </div>
    </div>
    <h2>Абонементи</h2>
    <!--    --><?php
    //    if (isset($subscribed_abonement)){
    //        echo "really set";
    //    }
    //    ?>
    <div class="abonements">
        <ul id="abonements-carousel" class="owl-carousel">
            <li class="abonement">
                <form action="{{route('subscribe.abonement', ['standard'])}}" method="post">
                    @csrf
                    <input type="hidden" name="visitorName" value="Artur Sarakhman">
                    <input type="hidden" name="visitorEmail" value="artur.sarahman@gmail.com">
                    <div class="content">
                        <h3>Стандарт</h3>
                        <p class='price'>
                            <span class="amount">399</span><span class="dollar"></span><span
                                class="month">/місяць</span>
                        </p>
                        <ul class="benefits">
                            <li class="benefit">Тренування з 12:00 по 22:00</li>
                            <li class="benefit">-------</li>
                            <li class="benefit">-------</li>
                            <li class="benefit">-------</li>
                        </ul>
                        <button type="submit">Деталі</button>
                    </div>
                </form>
            </li>
            <li class="abonement">
                <div class="content">
                    <h3>Преміум</h3>
                    <p class='price'>
                        <span class="amount">599</span><span class="dollar"></span><span class="month">/місяць</span>
                    </p>
                    <ul class="benefits">
                        <li class="benefit">Тренування з 9:00 по 23:00</li>
                        <li class="benefit">Програма тренувань</li>
                        <li class="benefit">-------</li>
                        <li class="benefit">-------</li>
                    </ul>
                    <button>Деталі</button>
                </div>
            </li>
            <li class="abonement">
                <div class="content">
                    <h3>Платинум</h3>
                    <p class='price'>
                        <span class="amount">999</span><span class="dollar"></span><span class="month">/місяць</span>
                    </p>
                    <ul class="benefits">
                        <li class="benefit">Тренування цілодобово</li>
                        <li class="benefit">Програма тренувань</li>
                        <li class="benefit">Програма харчування</li>
                        <li class="benefit">Басейн</li>
                    </ul>
                    <button>Деталі</button>
                </div>
            </li>
        </ul>
        <div class="custom-dots-container"></div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="./js/abonements-carousel.js"></script>
    <script>
        $('form').on('click', function (){
            $(this).submit();
        })
    </script>
@endsection



