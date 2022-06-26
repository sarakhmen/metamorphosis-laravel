@extends('layout')

@section('title', 'Метаморфоза - інформаційна сторінка')

@section('stylesheets')
<link rel="stylesheet" href="./css/info.css" />
@parent
@endsection

@section('header')
@include('header', ['pageName'=>'info'])
@endsection

@section('main')
<div class="main">
    <div class="about-metamorphosis">
        <div class="content">
            <h3 class="title">ПРО МЕТАМОРФОЗУ</h3>
            <p class="text">
                “Більше ніж п’ятсот відвідувачів, 10 кваліфікованих тренерів та 300 м2. Ми боремося за кожну кілокалорію наших
                відвідувачів. Займатися нелегко, та в Метаморфозі ти відкриєш для себе спорт з іншого боку. Кидай штангу
                щоєсили, кричи на непідйомні гантелі, бий себе в груди та виривай грушу зі стелі. Випусти всю свою злість,
                віддайся повністю тренуванню, але виконай поставлений план та рухайся до мети разом з усіма, кого об’єднують
                стіни мого спортзалу”, — власник Олег Репенко
            </p>
        </div>
        <div class="repenko">
            <img class="photo" src="./img/repenko.png" />
            <img class="background" src="./img/repenko-background.png" />
        </div>
    </div>

    <div class="why-us">
        <div class="argumentation">
            <div class="content">
                <h3>Чому саме ми?</h3>
                <p>Наш спортзал пропонує в повному обсязі доступ до всіх спортивних інструментів та аксесуарів: пояси, бинти,
                    лямки, резинки, магнезія та багато іншого завжди доступні для кожного відвідувача. Також ми дотримуємося
                    думки, що гарний зал об’єднує спортсменів майже кожного виду спорту, тому боксери, гімнасти, армреслери,
                    бодібілдери та стронгмени — всі знайдуть з чим попрацювати у нас.</p>
            </div>
            <div class="charts">
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-95">
                            <h5>Бодібілдинг</h5>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-75">
                            <h5>Бокс</h5>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-100">
                            <h5>Пауерліфтинг</h5>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-45">
                            <h5>Басейн</h5>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-90">
                            <h5>Армспорт</h5>
                        </div>
                    </div>
                </div>
                <div class="bar">
                    <div class="outer-rect">
                        <div class="inner-rect fill-80">
                            <h5>Гімнастика</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Наша команда</h2>
    <div class="coaches">
        <ul id="coaches-carousel" class="owl-carousel">
            @foreach($coaches as $coach)
            <li class="coach">
                <img src="{{$coach->image_url}}"/>
                <div class="description">
                    <h4>{{$coach->name}}</h4>
                    <h5>{{$coach->sports_rank}}</h5>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="custom-nav-container"></div>
    </div>
    <h2>Відгуки</h2>
    <div class="reviews">
        <ul id="reviews-carousel" class="owl-carousel">
            @foreach($feedbacks as $feedback)
            <li class="review">
                <img class="avatar" src="{{$feedback->avatar_url}}"/>
                <div class="details">
                    <h4>{{$feedback->name}} / {{$feedback->job}}</h4>
                    <p>{{$feedback->comment}}</p>
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
<script src="./js/coaches-carousel.js"></script>
<script src="./js/reviews-carousel.js"></script>
@endsection












