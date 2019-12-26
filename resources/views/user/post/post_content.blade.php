@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <form enctype="multipart/form-data" method="POST" action="/postcontent">
            {{ csrf_field() }}
{{--            title--}}
                <input type="text" name="TITLE" placeholder="Judul Project" class="form-control mb-1">

{{--            platform--}}

                <input type="text" name="platform" class="form-control mb-1" placeholder="platform">
{{--            deskripsi--}}
            <input type="text" class="form-control mb-1" name="Description" placeholder="deskripsi">
{{--            foto 1--}}
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 1</label>
                <input type="file" name="photo1" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
{{--            foto 2--}}
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 2</label>
                <input type="file" name="photo2" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
{{--            foto 3--}}
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 3</label>
                <input type="file" name="photo3" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
{{--            foto 4--}}
            <div class="form-group">
                <label for="exampleFormControlFile1">Foto project 4</label>
                <input type="file" name="photo4" class="form-control-file" id="exampleFormControlFile1" accept=".png,.PNG,.jpg,.JPG">
            </div>
            {{--            foto 1--}}
            <fieldset>
                <legend>UPLOAD FILE PROJECT</legend>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Apps project on RAR or Zip</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" accept='application/zip,application/rar'>
                </div>
            </fieldset>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>


@endsection
