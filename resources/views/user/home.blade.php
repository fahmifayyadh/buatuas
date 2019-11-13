@extends('layouts.app')

@section('content')
    <a href="/home/addpost">
        <button class="btn btn-primary">Add Content</button>
    </a>

    <div class="col-md-2 float-left mb-3">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center"><b>STORAGE</b></h4>
                Memori yang digunakan
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    <b class="ml-2 position-absolute">100%</b>
                </div>
                <p class="bg-danger ml-4 mr-4 text-center mt-2 progress-bar">Penuh</p>
            </div>
            <div class="card-body">

                <p>memori total yang anda miliki sebesar : <b>x</b></p>
                <p>memori yang digunakan sebesar : <b>x</b> </p>


            </div>
            <div class="card-footer">
                <b>STATUS :</b>
                @if($storage->status==vvip)
                    <button type="button" class="btn btn-warning btn-sm active">VVIP Storage</button>
                    @elseif($storage->status==vip)
                        <button type="button" class="btn btn-danger btn-sm active">VIP Storage</button>
                    @else
                        <button type="button" class="btn btn-primary btn-sm active">FREE Storage</button>
                    @endif


            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-sm-center">
            @foreach($posts as $post)
                    <div class="col-3 float-left">
                        <div class="card mt-2">
                            <article class="post" data-postid="{{ $post->id }}">
                            <a class="mt-2 mb-2 float-left" href="/profile/{{ $post->user_id }}">
                                @if($post->pic==null)
                                <img src="{{asset('img/user.png')}}" class="col-3 float-left">
                                @else
                                    <img src="{{ $post->pic }}" class="col-3 float-left">
                                @endif
                                <font class="float-left">{{ $post->name }}</font></a>
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
                                <a href="#" class="btn btn-primary">Download</a>
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
