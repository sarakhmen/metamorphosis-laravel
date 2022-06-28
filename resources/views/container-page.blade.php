@extends('layout')

@section('title', 'Метаморфоза - сторінка контейнер')

@section('stylesheets')
<link rel="stylesheet" href="./css/container.css" />
<link rel="stylesheet" href="./css/subscribe-form.css"/>
@parent
@endsection

@section('header')
@include('header', ['pageName'=>'container'])
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
        <button>Перейти до запису</button>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script src="./js/setup-subscribe-popup.js"></script>
@endsection




















