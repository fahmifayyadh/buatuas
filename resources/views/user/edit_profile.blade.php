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
            <form action="/profile/{{$users->id}}/update" method="post">
                @csrf
                @method('post')
                    <div class="form-group ">
                        <label class="float-left">Name :</label>
                        <input name="username" value="{{$users->name}}" class="form-control col-md-5">
                    </div>
                <div class="form-group">
                    <label class="float-left">Phone Number :</label>
                    <input name="phone" class="form-control col-md-5" value="{{ $users->phone_number }}">
                </div>
                <div class="form-group">
                    <label class="float-left">Birth :</label>
                    <input name="birth_address" class="form-control col-md-2 float-left" value="{{$users->birth_address}}">
                    <input type="date" name="birth_date" value="{{$users->birth_date}}" class="form-control col-md-5 float-left">
                </div>
               <div class="form-group">
                   <label>Address :</label>
                   <input class="form-control" value="{{$users->address}}">
               </div>
                <div class="form-group">
                    <label>Hobby :</label>
                    <input class="form-control" value="{{$users->hobby}}" >
                </div>
                <div class="form-group">
                    <label>Skill :</label>
                    <textarea class="form-control">{{$users->skill}}</textarea>
                </div>
                <div class="form-group">
                    <label>Experience :</label>
                    <textarea class="form-control" >{{ $users->experience }}</textarea>
                </div>
                <div class="form-group">
                    <label>Overview :</label>
                    <textarea class="form-control">{{ $users->overview }}</textarea>
                </div>
                <button class="btn btn-warning mt-3" type="submit">Save my Profile</button>
            </form>
        </div>
    </div>
    @endsection
