<!--header section start-->
<header class="header">
    <!--topbar start-->
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-headphones-alt mr-1"></span> 24x7 Technical
                                Support</li>
                            <li class="list-inline-item"><span class="fas fa-phone-alt mr-1"></span> (+228 ) 90 75 45 56
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline text-md-right text-lg-right text-left  mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="rounded"><span class="fab fa-facebook-f"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                        class="fab fa-twitter"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                        class="fab fa-linkedin-in"></span></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="rounded"><span
                                        class="fab fa-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--topbar end-->
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('css/img/logo-color_1.png') }}" alt="logo" class="img-fluid" style="height: 70px;" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="{{ url('/') }}"> Accueil</a>
                    </li>
                    <li><a href="{{ url('a-propos') }}">A Propos</a></li>
                    <li><a href="{{ url('nos-services') }}">Nos Services</a></li>
                    <li><a href="{{ url('notre-equipe') }}">Notre Equipe</a></li>
                    <li><a href="{{ url('nous-contacter') }}">Nous Contacté </a></li>
                    <li><a href="#" class="btn secondary-solid-btn check-btn">Appel Gratuit </a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->