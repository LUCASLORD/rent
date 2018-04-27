<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="#!" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Home</a></li>
                <li><a href="badges.html">Sobre</a></li>
                <li><a href="collapsible.html">Contato</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="{{asset('img/slides/modelo_slide_1.jpg')}}">
            </div>
            <a href="#user"><img class="circle" src="{{asset('img/slides/modelo_slide_1.jpg')}}"></a>
            <a href="#name"><span class="black-text name">{{ Auth::user()->name }}</span></a>
            <a href="#email"><span class="black-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>
    <li><a href="{{route('admin.home')}}"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="{{route('admin.categories.index')}}"><i class="material-icons">class</i>Categorias</a></li>
    <li><a href="{{route('admin.vehicles.index')}}"><i class="material-icons">directions_car</i>Veìculos</a></li>
    <li><a href="{{route('admin.clients.index')}}"><i class="material-icons">person</i>Clients</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><div class="divider"></div></li>
    <div class="user-view"></div>
    <div class="user-view"></div>
    <li><a class="subheader black-text"><i class="material-icons black-text">FALCOLABS</i></a></li>
</ul>
