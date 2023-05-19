@extends('layouts.rsm')

@section('title','Резюмелер')
@section('photo')
    <img src="{{asset('uploads/'.$res->image)}}" alt="" class="img-fluid rounded-circle">
@endsection
@section('name')
    <h1 class="text-light text-center"><a href="index.html">{{$res->name}} {{$res->surname}} {{$res->fname}}</a></h1>
@endsection
@section('main')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center" >
    <div class="hero-container" data-aos="fade-in">
        <h1>{{$res->name}} {{$res->surname}}</h1>
        <p>Мен <span class="typed" data-typed-items="{{$res->job}}"></span></p>
    </div>
    </section>
@endsection
@section('about')
    <div class="section-title">
        <h2>Мен туралы</h2>
        <p>{{$res->aboutm}}</p>
    </div>

    <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <img src="{{asset('uploads/'.$res->image)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{$res->job}}</h3>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Туған күні:</strong> <span>{{$res->birthdate}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Электронды мекен-жайы:</strong> <span>{{$res->email}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Ұялы байланыс нөмірі:</strong> <span>{{$res->phone}}</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Категориясы:</strong> <span>{{$res->category->name}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Асханасы:</strong> <span>{{$res->cuisine->name}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Тіл білімі:</strong> <span>{{$res->lang}}</span></li>
                    </ul>
                </div>
                <p>{{$res->skill}}</p>
            </div>
        </div>
    </div>
@endsection
@section('resume')
    <div class="section-title">
        <h2>Ақпараттар</h2>
    </div>

    <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Білімі</h3>
            <div class="resume-item">
                <h4>{{$res->prof}}</h4>
                <h5>{{$res->year}}</h5>
                <p><em>{{$res->know}}</em></p>
            </div>
            <div class="resume-item">
                <h4>{{$res->prof1}}</h4>
                <h5>{{$res->year1}}</h5>
                <p><em>{{$res->know1}}</em></p>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Тәжірибелері</h3>
            <div class="resume-item">
                <h4>{{$res->p}}</h4>
                <h5>{{$res->yearj}}</h5>
                <p><em>{{$res->org}} </em></p>
                <ul>
                    <li>{{$res->aboutj}}</li>
                </ul>
            </div>
            <div class="resume-item">
                <h4>{{$res->p1}}</h4>
                <h5>{{$res->yearj1}}</h5>
                <p><em>{{$res->org1}} </em></p>
                <ul>
                    <li>{{$res->aboutj1}}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('contact')
    <div class="section-title">
        <h2>Контакт</h2>
    </div>

    <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Мекен-жайы:</h4>
                    <p>Aлматы қ.</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Электронды мекен-жайы:</h4>
                    <p>{{$res->email}}</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Ұялы байланыс нөмірі:</h4>
                    <p>{{$res->phone}}</p>
                </div>

                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBoR2LEXC_2BLULSctbcPx0Pi_O1CwRr10&q=Алматы+Жандосова+55" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

        </div>

        <div class="col-lg-6">
            <form action="{{route('contact.store')}}" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Есіміңіз" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Электронды мекен-жайыңыз" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Тақырыбы" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Хабарлама" required></textarea>
                </div>
                <button type="submit" class="text-center mt-3 btn btn-outline-primary">Хабарламаны жіберу</button>
            </form>
        </div>

    </div>

    </div>
@endsection

