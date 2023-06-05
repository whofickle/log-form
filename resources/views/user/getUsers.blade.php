@extends('master')

@section('title')
    All Users
@endsection

@section('content')
    <div class="usersView">
        <div class="title">
            <h1>All Users</h1>
        </div>

        <div class="table userTable">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>To Users Uploaded Files</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->user_id    }}</td>
                        <td>{{ $user->username   }}</td>
                        <td><a href="{{ url('/users/'.$user->user_id) }}">View Uploads</a><td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
