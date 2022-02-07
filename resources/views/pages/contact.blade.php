@extends('layouts.base')






@section('main')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url({{ url('css/img/header-bg-5.jpg') }})no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Nous Contacté</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                <li class="list-inline-item breadcrumb-item active">Nous Contacté</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-mobile icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Appelez-nous</h5>
                                <p class="text-muted mb-0">+228 90 75 45 56</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-location-pin icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Rendez nous visite</h5>
                                <p class="text-muted mb-0">Adidogome Hotel Nord Sud</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-email icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Envoyez-nous un e-mail</h5>
                                <p class="text-muted mb-0">help@yourdomain.com</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-headphone-alt icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->

    <!--contact us section start-->
    <section class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Prêt à commencer?</h4>
                        <form action="#" method="POST" id="contactForm" class="contact-us-form">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Entrer votre nom" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Entrer votre  email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Envoyer votre  Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            100 Yellow House, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <!--google map block start-->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450937!2d144.953735315922!3d-37.817323442021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1571030260624!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe>
        {{-- <iframe src="https://www.google.com/maps/dir/'6.202560,1.150969'/6.2045166,1.1448992/@6.2031949,1.1457489,17z/data=!3m1!4b1!4m7!4m6!1m3!2m2!1d1.150969!2d6.20256!1m1!4e1" height="450" style="border:0;" allowfullscreen=""></iframe> --}}
    </div>
    <!--google map block end-->
    
@endsection