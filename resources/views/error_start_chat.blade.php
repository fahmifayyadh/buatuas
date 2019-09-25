@extends('layouts.main')

@section('title', 'chating')

@section('container')
    <div class="alert alert-primary" role="alert">
        Let's Login or register now for enjoying feature
    </div>
    <center><h4 class="mt-5">Hai <b>{{$name}}</b>, sebaiknya kamu login terlebih dahulu</h4></center>
@endsection
