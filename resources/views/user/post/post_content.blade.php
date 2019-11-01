@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <form method="post" action="/postcontent">

{{--            title--}}
                <input type="text" name="TITLE" placeholder="Judul Project" class="form-control mb-1">

{{--            --}}

                <input type="text" name="platform" class="form-control mb-1" placeholder="platform">

            <input type="text" class="form-control mb-1" name="Description" placeholder="deskripsi">

            <input type="text" name="link_project" value="https://github.com/" class="form-control mb-1" placeholder="link project">

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 1</label>
                <input type="file" name="photo1" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 2</label>
                <input type="file" name="photo2" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 3</label>
                <input type="file" name="photo3" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 4</label>
                <input type="file" name="photo4" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
        </form>
    </div>


@endsection
