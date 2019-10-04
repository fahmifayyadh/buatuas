@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('sukses'))
            <div class="alert alert-warning" role="alert">
                A simple warning alert—check it out!
                {{session('sukses')}}
            </div>
        @endif
        <h3 class="align-content-center">PROFILE</h3>
        <div class="card ">
            <div class="">
                <img src="{{asset('img/user.png')}}" class="rounded-circle w-25 p-4">
            </div>
                <form action="/profile/{{$users->id}}/update" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label class="float-left">Name :</label>
                        <input name="name" type="text" value="{{$users->name}}" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label class="float-left">Phone Number :</label>
                        <input name="phone_number" class="form-control col-md-5" type="text" value="{{ $users->phone_number }}">
                    </div>
                    <div class="form-group">
                        <label class="float-left">Birth :</label>
                        <input name="birth_address" type="text" class="form-control col-md-2 float-left"
                               value="{{$users->birth_address}}">
                        <input type="date" name="birth_date" value="{{$users->birth_date}}"
                               class="form-control col-md-5 float-left">
                    </div>
                    <div class="form-group">
                        <label>Address :</label>
                        <input class="form-control" name="address" type="text" value="{{$users->address}}">
                    </div>
                    <div class="form-group">
                        <label>Hobby :</label>
                        <input class="form-control" type="text" name="hobby" value="{{$users->hobby}}">
                    </div>
                    <div class="form-group">
                        <label>Skill :</label>
                        <textarea class="form-control" name="skill">{{$users->skill}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Experience :</label>
                        <textarea class="form-control" name="experience">{{ $users->experience }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Overview :</label>
                        <textarea class="form-control" name="overview">{{ $users->overview }}</textarea>
                    </div>
                    <button class="btn btn-warning mt-3" type="submit">Save my Profile</button>
                </form>
        </div>
    </div>
@endsection
