@push('styles')
    <link rel="stylesheet" href="{{ asset('css/stylish-portfolio/stylish-portfolio.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/simple-line-icons/simple-line-icons.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('js/stylish-portfolio/stylish-portfolio.min.js') }}" type="text/javascript"></script>
@endpush

@extends('layouts.app')

@section('content')
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">ayobelajardulu.com</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1 text-white">Belajar Dulu</h1>
            <h3 class="mb-5 text-muted">
                <em>Guru apapun ada disini</em>
            </h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">
                Lebih lanjut <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>< Promotional invitation ></h2>
                    <p class="lead mb-5">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                        <a href="https://unsplash.com/">Unsplash</a>!</p>
                    <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Services</h3>
                <h2 class="mb-5">What We Offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="icon-screen-smartphone"></i>
                    </span>
                    <h4>
                        <strong>Responsive</strong>
                    </h4>
                    <p class="text-faded mb-0">Looks great on any screen size!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="icon-pencil"></i>
                    </span>
                    <h4>
                        <strong>Redesigned</strong>
                    </h4>
                    <p class="text-faded mb-0">Freshly redesigned for Bootstrap 4.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="icon-like"></i>
                    </span>
                    <h4>
                        <strong>Favorited</strong>
                    </h4>
                    <p class="text-faded mb-0">Millions of users
                        <i class="fa fa-heart"></i>
                        Start Bootstrap!</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                      <i class="icon-mustache"></i>
                    </span>
                    <h4>
                        <strong>Question</strong>
                    </h4>
                    <p class="text-faded mb-0">I mustache you a question...</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="mb-5 text-muted">< Guru / Mata Pelajaran ? ></h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Stationary</h2>
                  <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                </span>
              </span>
                        <img class="img-fluid" src="{{ asset('images/portfolio-1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Ice Cream</h2>
                  <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                </span>
              </span>
                        <img class="img-fluid" src="{{ asset('images/portfolio-2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Strawberries</h2>
                  <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                </span>
              </span>
                        <img class="img-fluid" src="{{ asset('images/portfolio-3.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Workspace</h2>
                  <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                </span>
              </span>
                        <img class="img-fluid" src="{{ asset('images/portfolio-4.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  -->

    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
        <div class="container">
            <h2 class="text-center">
                Get in touch with us!
            </h2>
            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 offset-lg-3">
                        <span class="service-icon rounded-circle mx-auto mb-3">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <h4>
                            <strong>Email</strong>
                        </h4>
                        <p class="text-faded">< alamat email ></p>
                    </div>
                </div>
            </div>
            <br>
            <form class="col-lg-6 offset-lg-3">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <button class="btn btn-success form-control">
                        Send <i class="fa fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#">
                        <i class="icon-social-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="#">
                        <i class="icon-social-instagram"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">All Rights Reserved &copy; {{ date('Y') }}</p>
        </div>
    </footer>
@endsection