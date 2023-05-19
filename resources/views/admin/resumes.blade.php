@extends('layouts.admin')

@section('title','ROLES PAGE')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Аты-жөні</th>
                        <th scope="col">Қызметі</th>
                        <th scope="col">###</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i<count($resumes); $i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td><a href="{{route('resumes.show',$resumes[$i]->id)}}">{{$resumes[$i]->name}}</a></td>
                            <td>{{$resumes[$i]->job}}</td>
                            <td>
                                <form action="{{route('admin.res.update',$resumes[$i]->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">Рұқсат беру</button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

