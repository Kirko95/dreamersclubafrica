@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/banner/banner4.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Gallery</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

 <br> <br>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/1.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/1.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/2.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/2.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/3.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/3.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/4.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/4.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
        </div>

        <br>

        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/5.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/5.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/6.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/6.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/7.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/7.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/gallery/8.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/gallery/8.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>

<br> <br>
@endsection