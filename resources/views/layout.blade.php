<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    @section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/custom-owl-carousel-config.css"/>
    <link rel="stylesheet" href="css/errors.css"/>
    @show
</head>
<body>
@yield('header')

@if(isset($subscribed))
<div>
    VISITOR IS REALLY SUBSCRIBED
</div>
@endif

@if($errors->any())
<div id="errors_popup" class="errors active">
    <div class="title">Увага!</div>
    @foreach($errors->all() as $error)
    <div class="error"> {{ $error }}</div>
    @endforeach
    <button class="ok" onclick="hidePopup('errors_popup')">Зрозуміло</button>
</div>
@endif

@yield('main')
<footer class="footer">
    <div class="footer-item first">
        <img src="./img/metamorphosis-logo-footer.svg"/>
        <p class="title">Метаморфоза</p>
    </div>
    <div class="footer-item">
        <img src="./img/address-logo.svg"/>
        <p class="footer-address">вул. 3-я Гвардійська, 3, Могилів-Подільський, Вінницька обл.</p>
    </div>
    <div class="footer-item">
        <img src="./img/phone-logo.svg"/>
        <p class="footer-phone">+380971266262</p>
    </div>
    <div class="footer-item">
        <img src="./img/instagram-logo.svg"/>
        <img src="./img/telegram-logo.svg"/>
    </div>
</footer>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/navbar.js"></script>
<script src="./js/hide-popup.js"></script>
@show
</body>

</html>
