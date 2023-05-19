@extends('layouts.app')

@section('title','Резюмелер')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{route('resumes.index')}}">Басты бет</a></li>
                <li>Резюмелер</li>
            </ol>
            <h2>Резюмелер</h2>
        </div>
    </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @foreach($resumes as $res)
                    @if($res->status==true)
                        <div class="row p-2 bg-white border rounded mb-5">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{asset('uploads/'.$res->image)}}" style="height: 300px;width: 90%;"></div>
                            <div class="col-md-6 mt-1">
                                <h1 style="font-family: Inter">{{$res->name}} {{$res->surname}} {{$res->fname}}</h1>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span style="font-family: Inter;font-size: 25px;"><i>{{$res->job}}</i></span>
                                </div>
                                <div class="mt-1 mb-1 spec-1" style="font-size: 20px;"><span>{{$res->cuisine->name}} <br></span><span class="dot"> {{$res->category->name}}</span></div>
                                <p class="text-justify text-truncate para mb-0">{{$res->aboutm}}<br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1" style="font-family: Inter;font-size: 30px;">{{$res->salary}} T</h4>
                                </div>
                                <div class="d-flex flex-column mt-4"><a href="{{route('resumes.show',$res->id)}}" class="btn btn-primary btn-sm" style="font-family: Inter;font-size: 20px;">Толығырақ</a>
                                    @can('update',$res)
                                        <a href="{{route('resumes.edit',$res->id)}}" class="btn btn-outline-primary btn-sm mt-2" style="font-family: Inter;font-size: 20px;" >Өзгерту</a>
                                    @endcan
                                    @can('delete',$res)
                                        <form action="{{route('resumes.destroy',$res->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm mt-2" style="font-family: Inter;font-size: 20px;" >Өшіру</button>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
