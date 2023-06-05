@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="usersView">
        <div class="title">
            <h1>LogCloud</h1>
        </div>

        <div class="links indexLinks">
            <a href="/users">All Users</a>
            <a href="/logs">All logs</a>
            <a href="/manual">Upload</a>
        </div>
    </div>
@endsection
