@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/project">
            <button class="btn btn-primary">Add Content</button>
        </a>

        <div class="row justify-content-sm-center">
            @foreach($posts as $post)
                    <div class="col-3 float-left">
                        <div class="card mt-2">
                            <article class="post" data-postid="{{ $post->id }}">
                            <a class="mt-2 mb-2 float-left"><img src="{{asset('img/user.png')}}" class="col-1"> <font
                                    class="float-left">{{ $post->name }}</font></a>
                            <img
                                src="https://cdn.dribbble.com/users/1464232/screenshots/7177467/media/def28a35750bf9ec1eeae73af4bfddc9.png"
                                class="card-img-top" alt="Image Error">
                            <div class="card-body" data-posId="{{ $post->id }}">
                                <h5 class="card-title font-weight-bold">{{ $post->TITLE }}</h5>
                                <p class="card-text">Platform : <br>{{ $post->platform }}</p>
                                <p class="card-text">Description :<br>{{ $post->Description }}</p>
                                <h6>Post on {{ $post->created_at }}</h6>
                                <a class="like" href="">
                                    {{--                                <img src="{{asset('img/liketrue.png')}}" class="col-3">--}}
                                    Like
                                </a> |
                                <a href="#">Dislike</a> |
                                @if(Auth::user()->id == $post->user_id )
                                    <a href="#">Edit</a> |
                                    <a href="#">Delete</a>
                                @endif
                                <img src="{{asset('img/comment.png')}}" class="col-md-1">
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </article>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>

@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/post.js') }}"></script>
    <script>
        var token = '{{ Session::token() }}';
        {{--var urlLike = '{{ Route('home/like') }}';--}}
    </script>
@endsection
