@extends('layouts.form')

@section('title', 'login')

@section('container')
    <form>
        <div class="container">
            {{--                card--}}
            <div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
                <div class="card-header text-center">LOGIN</div>
                <div class="card-body">
                    {{--                form--}}
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <small id="emailHelp" class="form-text text-muted mt-3 text-center">Don't have account? <a href="/regist">Register</a>
                    </small>
                </div>
            </div>
        </div>
    </form>

@endsection

@section ('error')
    <div class="alert alert-danger" role="alert">
        Username and Password not falid!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection
