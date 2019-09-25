@extends('layouts.main')

@section('title', 'Home Page')

@section('loading')
    <div class="container-fluid">
        <div class="spinner-grow text-danger justify-content-center d-flex" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
@endsection

@section('container')
    <h1>halo</h1>
    @endsection
