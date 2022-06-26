<header class="header">
    <nav class="nav">
        <div class="navbar-left">
            <ul>
                <li><a @if($pageName === 'landing') href="#" class="active-item" @else href="{{route('landing')}}" @endif>Головна</a></li>
                <li><a @if($pageName === 'info') href="#" class="active-item" @else href="{{route('info')}}" @endif>Про нас</a></li>
                <li><a @if($pageName === 'container') href="#" class="active-item" @else href="{{route('container')}}" @endif>Заняття</a></li>
            </ul>
        </div>
        <div class="navbar-center">
            <img src="./img/metamorphosis-logo.svg" alt="Logo"/>
            <h3>Метаморфоза</h3>
        </div>
        <div class="navbar-right">
            <button>Записатися</button>
        </div>
        <div class="navbar-menu">
            <img id="phone" src="./img/phone-nav.svg" alt="phone"/>
            <img id="menu" src="./img/menu.svg" alt="menu"/>
            <img id="cross" src="./img/cross.svg" alt="cross">
        </div>
        <div id="navbar-expanded-menu">
            <ul>
                <li><a @if($pageName === 'landing') href="#" class="active-item" @else href="{{route('landing')}}" @endif>Головна</a></li>
                <li><a @if($pageName === 'info') href="#" class="active-item" @else href="{{route('info')}}" @endif>Про нас</a></li>
                <li><a @if($pageName === 'container') href="#" class="active-item" @else href="{{route('container')}}" @endif>Заняття</a></li>
                <li>
                    <button>Записатися</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-content">
        <div class="header-content-text">
            @if($pageName === 'landing')
                <h1>Випусти свого звіра!</h1>
                <h3>Ласкаво просимо до найсуворішого залу твого міста</h3>
            @elseif($pageName === 'info')
                <h1>Про нас</h1>
            @elseif($pageName === 'container')
                <h1>Заняття</h1>
            @endif
        </div>
    </div>
</header>
