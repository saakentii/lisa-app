@extends('layouts.admin')

@section('title','ROLES PAGE')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{route('admin.users.search')}}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Қолданушыны енгізіңіз..." aria-label="Username" aria-describedby="basic-addon1">
                        <button type="submit" class="btn btn-outline-info">Іздеу</button>
                    </div>
                </form>


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Аты-жөні</th>
                        <th scope="col">Электронды мекен-жайы</th>
                        <th scope="col">Рөл</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i<count($users); $i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$users[$i]->name}}</td>
                            <td>{{$users[$i]->email}}</td>
                            <td>
                                <form action="{{route('admin.users.update',$users[$i]->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <select  class="form-control @error('role_id')is-invalid @enderror" id="selectInput" name="role_id">
                                        @foreach($roles as $r)
                                            <option @if($r->id==$users[$i]->role_id) selected @endif value="{{$r->id}}">{{$r->role}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary">Өзгерту</button>
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
