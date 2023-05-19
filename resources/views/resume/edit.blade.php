@extends('layouts.app')

@section('title','Резюме құру')
@section('content') <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="{{route('resumes.index')}}">Басты бет</a></li>
            <li>Жаңарту</li>
        </ol>
        <h2>Жаңарту</h2>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">`
        <div class="col-md-12">
            <form action="{{route('resumes.update',$resume->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <button onclick="myFunction()" type="button" class="col-12 btn btn-outline-dark mt-5" style="background-color: #D8C7FC;border-radius: 30px;"><span class="sp">Басты ақпараттар</span></button>
                <div id="myForm" class="form p-5">
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="nameInput">Есімі:</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="nameInput" name="name" value="{{$resume->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="surnameInput">Тегі:</label>
                            <input type="text" class="form-control @error('surname')is-invalid @enderror" id="surnameInput" name="surname" value="{{$resume->surname}}">
                            @error('surname')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <div class="example-1">
                                        <div class="form-group">
                                            <label class="label" >
                                                <img src="https://cdn-icons-png.flaticon.com/512/5558/5558253.png" width="50px" height="50px" >
                                                <span style="margin-right: 100px;">Фото жүктеу</span>
                                                <input type="file" name="image" value="{{$resume->image}}">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="fnameInput">Әкесінің аты:</label>
                            <input type="text" class="form-control @error('fname')is-invalid @enderror" id="fnameInput" name="fname" value="{{$resume->fname}}">
                            @error('fname')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="phoneInput">Ұялы байланыс нөмірі:</label>
                            <input type="text" class="form-control @error('phone')is-invalid @enderror" id="phoneInput" name="phone" value="{{$resume->phone}}">
                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="emailInput">Электронды мекен-жайы:</label>
                            <input type="email" class="form-control @error('email')is-invalid @enderror" id="emailInput" name="email" value="{{$resume->email}}">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="jobInput">Қызметі:</label>
                            <input type="text" class="form-control @error('job')is-invalid @enderror" id="jobInput" name="job" value="{{$resume->job}}">
                            @error('job')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="salaryInput">Қалайтын жалақысы:</label>
                            <input type="text" class="form-control @error('salary')is-invalid @enderror" id="salaryInput" name="salary" value="{{$resume->salary}}">
                            @error('salary')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="kesteInput">Жұмыс кестесі:</label>
                            <select class="select form-control"  name="keste" >
                                <option value="{{$resume->keste}}" selected></option>
                                <option value="Полный день">Полный день</option>
                                <option value="Гибкий график">Гибкий график</option>
                                <option value="Удаленная работа">Удаленная работа</option>
                                <option value="Сменный график">Сменный график</option>
                            </select>
                            @error('keste')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-2 col-6">
                            <label for="category_idInput">Категория:</label>
                            <select  class="form-control @error('category_id')is-invalid @enderror " id="selectInput" name="category_id">
                                @foreach($categories as $category)
                                    <option @if($category->id==$resume->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-6">
                            <label for="cuisine_idInput">Асхана:</label>
                            <select  class="form-control @error('cuisine_id')is-invalid @enderror " id="cuisine_idInput" name="cuisine_id">
                                @foreach($cuisine as $cus)
                                    <option @if($cus->id==$resume->cuisine_id) selected @endif value="{{$cus->id}}">{{$cus->name}}</option>
                                @endforeach
                            </select>
                            @error('cuisine_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>
                </div>

                <button onclick="myFunction2()" type="button" class="col-12 btn btn-outline-dark mt-5" style="background-color: #D8C7FC;border-radius: 30px;"><span class="sp">Жеке ақпараттар</span></button>
                <div id="myForm2" class="form p-5">
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="birthdateInput">Туған күні:</label>
                            <input type="date" class="form-control @error('birthdate')is-invalid @enderror" id="birthdateInput" name="birthdate" value="{{$resume->birthdate}}">
                            @error('birthdate')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="polInput">Жынысы:</label>
                            <select class="form-control" name="gender">
                                <option value="{{$resume->gender}}" selected>{{$resume->gender}}</option>
                                <option value="Ер">Ер</option>
                                <option value="Әйел">Әйел</option>
                            </select>
                            @error('pol')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="eduInput">Білімі:</label>
                            <select class="form-control" name="edu">
                                <option value="Орта">Орта</option>
                                <option value="Жоғары">Жоғары</option>
                            </select>
                            @error('edu')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <button onclick="myFunction3()" type="button" class="col-12 btn btn-outline-dark mt-5" style="background-color: #D8C7FC;border-radius: 30px;"><span class="sp">Білімі</span></button>
                <div id="myForm3" class="form p-5">
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="knowInput">Оқу орны:</label>
                            <input type="text" class="form-control @error('know')is-invalid @enderror" id="knowInput" name="know" value="{{$resume->know}}">
                            @error('know')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="profInput">Мамандығы:</label>
                            <input type="text" class="form-control @error('prof')is-invalid @enderror" id="profInput" name="prof" value="{{$resume->prof}}">
                            @error('prof')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="yearInput">Оқу периоды:</label>
                            <input type="text" class="form-control @error('year')is-invalid @enderror" id="yearInput" name="year" value="{{$resume->year}}">
                            @error('year')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <button onclick="myFunction3_1()" type="button" class="col-4 btn btn-outline-dark mt-3" style="background-color: #D8C7FC;border-radius: 30px;">+Оқу орнын қосу</button>
                        <div id="myForm3_1" class="form">
                            <div class="row">
                                <div class="form-group mt-2 col-4">
                                    <label for="know1Input">Оқу орны:</label>
                                    <input type="text" class="form-control @error('know1')is-invalid @enderror" id="know1Input" name="know1" value="{{$resume->know1}}">
                                    @error('know1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2 col-4">
                                    <label for="prof1Input">Мамандығы:</label>
                                    <input type="text" class="form-control @error('prof1')is-invalid @enderror" id="prof1Input" name="prof1" value="{{$resume->prof1}}">
                                    @error('prof1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2 col-4">
                                    <label for="year1Input">Оқу периоды:</label>
                                    <input type="text" class="form-control @error('year1')is-invalid @enderror" id="year1Input" name="year1" value="{{$resume->year1}}">
                                    @error('year1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="myFunction4()" type="button" class="col-12 btn btn-outline-dark mt-5" style="background-color: #D8C7FC;border-radius: 30px;"><span class="sp">Жұмыс тәжірибесі</span></button>
                <div id="myForm4" class="form p-5">
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="orgInput">Ұйым атауы:</label>
                            <input type="text" class="form-control @error('org')is-invalid @enderror" id="orgInput" name="org" value="{{$resume->org}}">
                            @error('org')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="pInput">Қызметі:</label>
                            <input type="text" class="form-control @error('p')is-invalid @enderror" id="pInput" name="p" value="{{$resume->p}}">
                            @error('p')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="yearjInput">Жұмыс істеген периоды:</label>
                            <input type="text" class="form-control @error('yearj')is-invalid @enderror" id="yearjInput" name="yearj" value="{{$resume->yearj}}">
                            @error('yearj')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="aboutjInput">Жұмыс туралы:</label>
                            <textarea class="form-control @error('aboutj')is-invalid @enderror" id="aboutjInput" name="aboutj">{{$resume->aboutj}}</textarea>
                            @error('aboutj')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <button onclick="myFunction4_1()" type="button" class="col-4 btn btn-outline-dark mt-3" style="background-color: #D8C7FC;border-radius: 30px;">+ Жұмыс орнын қосу</button>
                        <div id="myForm4_1" class="form">
                            <div class="row">
                                <div class="form-group mt-2 col-4">
                                    <label for="org1Input">Ұйым атауы:</label>
                                    <input type="text" class="form-control @error('org1')is-invalid @enderror" id="org1Input" name="org1" value="{{$resume->org1}}">
                                    @error('org1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2 col-4">
                                    <label for="p1Input">Қызметі:</label>
                                    <input type="text" class="form-control @error('p1')is-invalid @enderror" id="p1Input" name="p1" value="{{$resume->p1}}">
                                    @error('p1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2 col-4">
                                    <label for="yearj1Input">Жұмыс істеген периоды:</label>
                                    <input type="text" class="form-control @error('yearj1')is-invalid @enderror" id="yearj1Input" name="yearj1" value="{{$resume->yearj1}}">
                                    @error('yearj1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group mt-2 col-4">
                                    <label for="aboutj1Input">Жұмыс туралы:</label>
                                    <textarea class="form-control @error('aboutj1')is-invalid @enderror" id="aboutj1Input" name="aboutj1">{{$resume->aboutj1}}</textarea>
                                    @error('aboutj1')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="myFunction5()" type="button" class="col-12 btn btn-outline-dark mt-5" style="background-color: #D8C7FC; border-radius: 30px;"><span class="sp">Қосымша ақпараттар</span></button>
                <div id="myForm5" class="form p-5">
                    <div class="row">
                        <div class="form-group mt-2 col-4">
                            <label for="langInput">Шет тілін игеру деңгейі:</label>
                            <input type="text" class="form-control @error('lang')is-invalid @enderror" id="langInput" name="lang" value="{{$resume->lang}}">
                            @error('lang')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="skillInput">Жеке қасиеттері:</label>
                            <textarea class="form-control @error('skill')is-invalid @enderror" id="skillInput" name="skill">{{$resume->skill}}</textarea>
                            @error('skill')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2 col-4">
                            <label for="aboutmInput">Өзіңіз туралы:</label>
                            <textarea class="form-control @error('aboutm')is-invalid @enderror" id="aboutmInput" name="aboutm">{{$resume->aboutm}}</textarea>
                            @error('aboutm')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mt-5 text-center">
                    <button type="submit" class="btn btn-success col-4" style="border-radius: 30px;">Өзгерту</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        document.getElementById("myForm").classList.toggle("shows");
    }
    function myFunction2() {
        document.getElementById("myForm2").classList.toggle("shows");
    }
    function myFunction3() {
        document.getElementById("myForm3").classList.toggle("shows");
    }
    function myFunction3_1() {
        document.getElementById("myForm3_1").classList.toggle("shows");
    }
    function myFunction4() {
        document.getElementById("myForm4").classList.toggle("shows");
    }
    function myFunction4_1() {
        document.getElementById("myForm4_1").classList.toggle("shows");
    }
    function myFunction5() {
        document.getElementById("myForm5").classList.toggle("shows");
    }

</script>
@endsection
