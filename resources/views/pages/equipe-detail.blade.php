@extends('layouts.base')



@section('main')



  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
  style="background: url({{ asset('css/img/header-bg-5.jpg') }})no-repeat top center / cover">
<div class="container">
 <div class="row justify-content-center">
     <div class="col-md-8 col-lg-7">
         <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
             <h1 class="text-white mb-0">Team Single</h1>
             <div class="custom-breadcrumb">
                 <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                     <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                     <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                     <li class="list-inline-item breadcrumb-item active">Team Single</li>
                 </ol>
             </div>
         </div>
     </div>
 </div>
</div>
</section>
<!--header section end-->

<!--team single section start-->
<section class="team-single-section ptb-100">
<div class="container">
 <div class="row align-items-center">
     <div class="col-md-12 col-sm-12 col-lg-5">
         <div class="team-single-img">
             <img src="{{ asset('css/img/team-2.jpg') }}" alt="member" class="img-fluid rounded shadow-sm"/>
         </div>
     </div>
     <div class="col-md-12 col-sm-12 col-lg-6">
         <div class="team-single-text">
             <div class="team-name mb-4">
                 <h4 class="mb-1">Lily Henry</h4>
                 <span>Managing Director</span>
             </div>
             <ul class="team-single-info">
                 <li><strong>Phone:</strong><span> (+123) 123-456-789</span></li>
                 <li><strong>Email:</strong><span> yourname@domain.com</span></li>
             </ul>
             <div class="text-content mt-20">
                 <p>Authoritatively deploy fully researched leadership skills whereas one-to-one best
                     practices. Monotonectally aggregate virtual imperatives and accurate technology.
                     Dynamically streamline progressive sources before user friendly.</p>
                 <p>Enthusiastically synthesize cross-unit technology for sticky results.
                 </p>
                 <p>Progressively productize vertical alignments after sticky process improvements. Competently scale transparent methods of empowerment and visionary products.</p>
             </div>
             <ul class="team-social-list list-inline mt-4">
                 <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-facebook"></span></a></li>
                 <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-instagram"></span></a></li>
                 <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-dribbble"></span></a></li>
                 <li class="list-inline-item"><a href="#" class="color-primary"><span class="ti-linkedin"></span></a></li>
             </ul>
         </div>
     </div>
 </div>
 <div class="row mt-5">
     <div class="col-md-6 col-sm-6 col-12">
         <div class="section-heading">
             <h5>Activities And Skills</h5>
             <div class="section-heading-line-left"></div>
         </div>
         <ul class="list-unstyled tech-feature-list">
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong>
                 Good Business Consultants are Excellent Communicators
             </li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                 At the End of a Project, Good Business Consultants
             </li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Good Business Consultants are Willing to Travel Where the Work
                 Is</li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Write a Business Plan that Clearly Articulates the Following</li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Business</strong>
                 Assertively embrace technically sound action
             </li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Quickly</strong> architect customer directed portals with
                 Is</li>
             <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Web Agency</strong> Synergistically plagiarize robust methodologies</li>
         </ul>
     </div>
     <div class="col-md-6 col-sm-6 col-12">
         <div class="section-heading mt-40">
             <h5>Professional Skills</h5>
             <div class="section-heading-line-left"></div>
         </div>
         <div class="skill-content-wrap">
             <p>Holisticly whiteboard low-risk high-yield e-services vis-a-vis user-centric data. Competently benchmark communities whereas interactive.</p>
             <div class="progress-item">
                 <div class="progress-title">
                     <h6>Technical skills<span class="float-right"><span class="progress-number">80</span>%</span>
                     </h6>
                 </div>
                 <div class="progress">
                     <span style="width:80%;"><span class="progress-line"></span></span>
                 </div>
             </div>
             <div class="progress-item">
                 <div class="progress-title">
                     <h6>Marketing<span class="float-right"><span class="progress-number">70</span>%</span>
                     </h6>
                 </div>
                 <div class="progress">
                     <span style="width:70%;"><span class="progress-line"></span></span>
                 </div>
             </div>
             <div class="progress-item">
                 <div class="progress-title">
                     <h6>Web Consulting<span class="float-right"><span class="progress-number">85</span>%</span>
                     </h6>
                 </div>
                 <div class="progress">
                     <span style="width:85%;"><span class="progress-line"></span></span>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</section>
<!--team single section end-->

<!--customer section start-->
<div class="customer-section ptb-100 d-none d-md-block d-sm-none d-lg-block gray-light-bg">
<div class="container">
 <div class="row justify-content-center">
     <div class="col-md-12">
         <div class="client-section-wrap d-flex flex-row align-items-center">
             <p class="lead mr-5 mb-0">Trusted by companies like:</p>
             <ul class="list-inline justify-content-between">
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-01.png')}}" width="85" alt="client" class="img-fluid"></li>
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-02.png')}}" width="85" alt="client" class="img-fluid"></li>
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-03.png')}}" width="85" alt="client" class="img-fluid"></li>
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-04.png')}}" width="85" alt="client" class="img-fluid"></li>
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-05.png')}}" width="85" alt="client" class="img-fluid"></li>
                 <li class="list-inline-item"><img src="{{ asset('css/img/clients-logo-06.png')}}" width="85" alt="client" class="img-fluid"></li>
             </ul>
         </div>
     </div>
 </div>
</div>
</div>
<!--customer section end-->

    
@endsection