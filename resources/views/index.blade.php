@extends('master')

@section('title')
    Home
@endsection

@section('content')
<div class="container mt-5 usersView">
    <div class="title text-center">
        <h1>LogCloud</h1>
    </div>

    <div class="d-flex justify-content-center links indexLinks mt-4">
        <a href="/users" class="btn btn-primary me-5">All Users</a>
        <a href="/logs" class="btn btn-primary me-5">All Logs</a>
        <a href="/manual" class="btn btn-success">Upload</a>
    </div>
</div>
@endsection
