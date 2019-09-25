@extends('layouts.form')

@section('title', 'registration')

@section ('container')
    <form>
        <div class="container">
            {{--                card--}}
            <div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
                <div class="card-header d-flex flex-column">
                    <div class="d-flex justify-content-center">REGISTER</div>
                    <div class="d-flex justify-content-end">
                        <a href="/">
                            <button type="button" class="btn btn-secondary btn-sm ">Back
                            </button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    {{--                form--}}
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3">Email</label>
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/beranda">
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </a>
                    </div>
                    <small id="emailHelp" class="form-text text-muted mt-4 text-center">Have an account? <a href="/login">Login</a></small>
                </div>
            </div>
        </div>
    </form>

@endsection
