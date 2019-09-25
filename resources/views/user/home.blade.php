@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-sm-center">
        <button class="btn btn-primary">Add Content</button>
        <div class="col-md-5">
            <div class="card mt-2" >
                <a class="mt-2 mb-2 float-left"><img src="{{asset('img/user.png')}}" class="col-md-1"> <font class="float-left">Username Account</font></a>
                <img src="https://cdn.dribbble.com/users/1464232/screenshots/7177467/media/def28a35750bf9ec1eeae73af4bfddc9.png" class="card-img-top" alt="Image Error">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Nama Project</h5>
                    <p class="card-text">Platform : Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <img src="{{asset('img/liketrue.png')}}" class="col-md-1">
                    <img src="{{asset('img/comment.png')}}" class="col-md-1">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
