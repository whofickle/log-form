@extends('master')

@section('title')
    Manual upload
@endsection

@section('content')
<div class="container mt-5">
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <input type="hidden" name="manual" value="true">

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
