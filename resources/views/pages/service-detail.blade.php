@extends('layouts.base')



@section('main')





    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url({{ asset('css/img/header-bg-5.jpg') }})no-repeat top center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Services Details</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                                {{-- <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li> --}}
                                <li class="list-inline-item breadcrumb-item active">Services Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--services details start-->
    <section class="service-details-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="service-details-wrap">
                        <img src="{{ asset('css/img/slider-img-2.jpg') }}" alt="services" class="img-fluid rounded shadow-sm"/>
                        <div class="services-detail-content mt-4">
                            <h4>Services Details</h4>
                            <p>Phosfluorescently disseminate magnetic e-business for user-centric "outside the box"
                                thinking. Compellingly integrate client-based synergy after cutting-edge solutions.
                                Objectively foster economically sound partnerships with timely meta-services. Globally
                                develop market positioning methods of empowerment before ubiquitous niches.
                                Energistically build extensive experiences after real-time channels.</p>

                            <p>Seamlessly coordinate high-quality functionalities and bricks-and-clicks methods of
                                empowerment. Authoritatively cultivate adaptive bandwidth and collaborative intellectual
                                capital. Uniquely build open-source experiences without market positioning customer
                                service. Dramatically strategize resource sucking outsourcing through state of the art
                                vortals. Quickly aggregate enterprise portals with cross-platform e-business.</p>

                            <p>Enthusiastically matrix future-proof internal or "organic" sources through covalent
                                communities. Synergistically incubate reliable metrics whereas client-focused
                                technologies. Completely embrace multifunctional scenarios without orthogonal benefits.
                                Competently enhance equity invested data with performance based niches. Assertively
                                aggregate professional catalysts for change without emerging metrics.</p>

                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="img-wrap">
                                        <img src="{{ asset('css/img/images.jpg') }}" alt="services" class="img-fluid"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1 pb-3">Completely anembrace multifunctional scenarios without orthogonal benefits.
                                            Competently the enhance equity invested data with performance based niches:
                                        </li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Foreclosure</strong>
                                            consultant Human consulting
                                        </li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                            Immigration, Information
                                        </li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong> Optimization consultant</li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Rapidiously</strong> conceptualize communities</li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Consultant</strong>
                                            pharmacist Creative consultant
                                        </li>
                                        <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Monotonectally</strong>
                                            B2B core competencies
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="accordion-1" class="accordion accordion-faq mt-5">
                                <!-- Accordion card 1 -->
                                <div class="card">
                                    <div class="card-header py-3 collapsed" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                        <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Which license do I need?</h6>
                                    </div>
                                    <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1" style="">
                                        <div class="card-body">
                                            <p>Uniquely leverage other's distinctive infomediaries rather than leveraged supply chains. Continually seize distributed collaboration and idea-sharing whereas user.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card 2 -->
                                <div class="card">
                                    <div class="card-header py-3" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                        <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How do I get access to a theme?</h6>
                                    </div>
                                    <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <p>Rapidiously incentivize virtual e-commerce and exceptional e-tailers. Progressively network focused catalysts for change without orthogonal benefits. Dramatically empower.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card 3 -->
                                <div class="card">
                                    <div class="card-header py-3" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                        <h6 class="mb-0"><span class="ti-wallet mr-3"></span> How do I see previous orders?
                                        </h6>
                                    </div>
                                    <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                        <div class="card-body">
                                            <p>Proactively monetize long-term high-impact innovation and scalable relationships. Dynamically mesh principle-centered functionalities before next-generation best practices. Distinctively empower.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        <!--all services list-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>All Services</h5>
                            </div>
                            <ul class="all-service-list">
                                <li><a href="#">Financial Services Consulting</a></li>
                                <li><a href="#">Consumer Product Consulting</a></li>
                                <li><a href="#">Global Consumer insights</a></li>
                                <li><a href="#">Independent contractor</a></li>
                                <li><a href="#">Creative Idea Development</a></li>
                                <li><a href="#">Social Media Marketing</a></li>
                            </ul>
                        </aside>

                        <!--need help-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Need Help?</h5>
                            </div>
                            <p>We are available in 24/7 hours for dedicated support</p>
                            <ul class="primary-list mt-25">
                                <li><span class="ti-location-pin mr-2 color-primary"></span> 123 Yellow House, Mn 9007
                                </li>
                                <li><span class="ti-mobile mr-2 color-primary"></span> (+123) 456-789-012</li>
                                <li><span class="ti-email mr-2 color-primary"></span> youname@domail.com</li>
                            </ul>
                        </aside>

                        <!-- Subscribe widget-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Newsletter</h5>
                            </div>
                            <p>Enter your email address below to subscribe to my newsletter</p>
                            <form action="#" method="post"
                                  class="d-none d-md-block d-lg-block">
                                <input type="text" class="form-control input" id="email-footer" name="email"
                                       placeholder="info@yourdomain.com">
                                <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe
                                </button>
                            </form>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services details end-->

    <!--call to action section start-->
    <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Consulting Agency for Your Business</h3>
                        <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn secondary-solid-btn">Become a Client</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->
    
@endsection