<section id="menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <span class="navbar-logo">{!!Html::image('public/assets/images/logo-128x128.png')!!}</span>
                        <a class="navbar-caption" href="{{url('/')}}">Adopta un bitxo!</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item">
                            <a class="nav-link link" href="{{url('/')}}">INICI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="{{url('/sobreNosaltres')}}">Sobre nosaltres</a>
                        </li>
                        @if (Auth::guest())
                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false">Participa</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/auth/login')}}">Entra</a>
                                <a class="dropdown-item" href="{{url('/auth/register')}}">Registra't</a>
                            </div>
                        </li>
                        @elseif (Auth::user()->name== 'admin')
                         <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false">Gestió</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/gestioAdopcions')}}">Gestio d'adopcions</a>
                                <a class="dropdown-item" href="{{url('/afegirAnimal')}}">Afegir animal</a>
                                <a class="dropdown-item" href="{{url('/editarAnimal')}}">Editar animals</a>
                                <a class="dropdown-item" href="{{url('auth/logout')}}">Logout</a>

                            </div>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false">El meu menú</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/lesMevesAdopcions')}}">Les meves Adopcions</a>
                                <a class="dropdown-item" href="{{url('/elsMeusApadrinaments')}}">Els meus apadrinaments</a>
                                <a class="dropdown-item" href="{{url('auth/logout')}}">Logout</a>

                            </div>
                        </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="" aria-expanded="false">Els nostres bitxos</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/gats')}}">Gats</a>
                                <a class="dropdown-item" href="{{url('/gossos')}}">Gossos</a>
                                <a class="dropdown-item" href="{{url('/rosegadors')}}">Rosegadors</a>
                            </div>
                        </li>
                        <li class="nav-item nav-btn">
                            <a class="nav-link btn btn-white-outline btn-white" href="{{url('adopta')}}">ADOPTA</a>
                        </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>


                </div>
            </div>

        </div>
    </nav>

</section>