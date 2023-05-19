@extends('layouts.app')

@section('title','Контакт')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{route('resumes.index')}}">Басты бет</a></li>
                <li>Контакт</li>
            </ol>
            <h2>Контакт</h2>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Біздің мекен-жайымыз</h3>
                        <p>Алматы қаласы,Жандосова 55</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Электронды мекен-жайымыз</h3>
                        <p>Sakeserik00@mail.ru</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Ұялы байланыс нөміріміз</h3>
                        <p>+7 7077889364</p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0" src="https://goo.gl/maps/DVNGhQhAxMqmC25y7" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
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
    </section>
@endsection
