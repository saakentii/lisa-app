@extends('layouts.app')

@section('title','CookAist')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url({{asset('assets/img/slide/slide-1.png')}})">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><i>Сізбен бірге - <span>CookAist</span></i> </h2>
                                <p class="animate__animated animate__fadeInUp">Дәмді тағам жегің келсе, <br>  аспазды бізден  ізде!</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp"><i>Толығырақ</i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-2.jpg')}})">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown"><i>Бізбен бірге қалауларыңа <span>қол жеткіз!</span></i></h2>
                                <p class="animate__animated animate__fadeInUp">Бір ингредиенттен оңдаған тағам түрін жасай алатын нағыз аспазды тап.  </p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp"><i>Толығырақ</i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-3.jpg')}})">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><i>Біз сізге <span> тағамнан ләззат алу </span>сезімін жеткіземіз</i></h2>
                                <p class="animate__animated animate__fadeInUp">Мейрамхананың ыдысы күміс болғанынан көрі бас аспаздың алтын болғаны маңызды!</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp"><i>Толығырақ</i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <section id="featured" class="featured">
        <div class="container">

            <div class="row">
                @foreach($r as $res)
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <img  src="{{asset('uploads/'.$res->image)}}" class="t-img" alt="">
                            {{--                        <i class="bi bi-card-checklist"></i>--}}
                            <h3><a href="">{{$res->name}} {{$res->surname}} {{$res->fname}} </a></h3>
                            <p>{{$res->aboutm}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


@endsection
