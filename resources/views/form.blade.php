@extends('master')

@section('title')
    Manual upload
@endsection

@section('content')
<form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
    <label for="file">File:</label>
    <input type="file" id="file" name="file">
    <br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>

    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
    <br>

    <input type="hidden" name="manual" value='true'>
    <input type="submit">
</form>
@endsection
