@extends('layout')

@section('title', 'Метаморфоза - головна сторінка')

@section('stylesheets')
<link rel="stylesheet" href="./css/landing.css"/>
<link rel="stylesheet" href="./css/subscribe-form.css"/>
@parent
@endsection

@section('header')
@include('header', ['pageName'=>'landing'])
@endsection

@section('main')
<div id="subscription_popup" class="subscribe-form">
    <form method="post">
        @csrf
        <div id="subscriptionFormTitle" class="title"></div>
        <div class="input-group">
            <label for="visitorName">Ім'я відвідувача</label>
            <input type="text" placeholder="Введіть ім'я відвідувача" name="visitor_name" maxlength="50">
        </div>
        <div class="input-group">
            <label for="visitorEmail">* Електронна адреса для зв'язку</label>
            <input type="email" placeholder="Введіть електронну адресу" name="visitor_email" required>
        </div>
        <div class="input-group">
            <label for="visitorPhone">* Номер телефону</label>
            <input type="tel" pattern="\+[0-9]{3}[0-9]{9}"
                   required placeholder="+380XXXXXXXXX" name="visitor_phone" required>
        </div>
        <div class="controls">
            <button type="submit" class="subscribe">Записатись</button>
            <button type="button" class="cancel" onclick="hidePopup('subscription_popup')">Закрити</button>
        </div>
    </form>
</div>

<div class="main">
    <h2>Заняття</h2>
    <div class="classes">
        <ul>
            @foreach ($exercises as $exercise)
            <li onclick="setupSubscribePopup('subscription_popup', `{{route('subscribe.exercise', [$exercise->id])}}`, 'subscriptionFormTitle', 'Заняття: {{$exercise->name}}')">
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
                <div id="content-{{$abonement->id}}" class="content">
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
                    <button type="button"
                            onclick="setupSubscribePopup('subscription_popup', `{{route('subscribe.abonement', [$abonement->id])}}`, 'subscriptionFormTitle', 'Абонемент: {{$abonement->name}}')">
                        Запис
                    </button>
                </div>
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
<script src="./js/setup-subscribe-popup.js"></script>
@endsection



