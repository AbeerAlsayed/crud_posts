@extends('layouts.master')

@section('title')
    Dashboard
@stop


@section('css')

@endsection
@section('content')
    <form class="form" action="{{ route('cv.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">User Name</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Email</label>
            <input class="form-control" type="email" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Phone</label>
            <input class="form-control" type="text" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Address</label>
            <input class="form-control" id="address" type="text" name="address">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Job</label>
            <input class="form-control" id="job" type="text" name="job">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Picture</label>
            <input class="form-control" id="picture" type="file" name="picture">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Cv</label>
            <input class="form-control" id="cv" type="file" name="cv">
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
        </div>
    </form>

@stop
@section('js')
@endsection
