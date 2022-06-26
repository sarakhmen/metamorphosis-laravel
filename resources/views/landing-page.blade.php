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
            @foreach ($abonements as $abonement)
            <li class="abonement">
                <form action="{{route('subscribe.abonement', [$abonement->id])}}" method="post">
                    @csrf
<!--                    <input type="hidden" name="visitorName" value="Artur Sarakhman">-->
<!--                    <input type="hidden" name="visitorEmail" value="artur.sarahman@gmail.com">-->
                    <div class="content">
                        <h3>{{$abonement->name}}</h3>
                        <p class='price'>
                            <span class="amount">{{$abonement->price}}</span><span class="dollar"></span><span
                                class="month">/місяць</span>
                        </p>
                        <ul class="benefits">
                            @foreach(explode(';', $abonement->description) as $benefit)
                            <li class="benefit">{{empty($benefit) ? '-------' : $benefit}}</li>
                            @endforeach
                        </ul>
                        <button type="submit">Запис</button>
                    </div>
                </form>
            </li>
            @endforeach
        </ul>
        <div class="custom-dots-container"></div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="./js/abonements-carousel.js"></script>
<!--    <script>-->
<!--        $('form').on('click', function (){-->
<!--            $(this).submit();-->
<!--        })-->
<!--    </script>-->
@endsection



