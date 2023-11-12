@extends('master')

<?php
use App\Models\Log;
?>

@section('title')
    All Users
@endsection

@section('content')
<div class="container mt-5 usersView">
    <div class="title text-center">
        <h1>All Users</h1>
    </div>

    <div class="table-responsive userTable mt-3">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>File Count</th>
                    <th>Last Upload</th>
                    <th>To User's Uploaded Files</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <?php
                $countFiles = Log::where('user_id', $user->user_id)->count();
                $latestFile = Log::where('user_id', $user->user_id)->latest()->first();
                ?>
                    <tr>
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $countFiles }}</td>
                        <td>{{ $latestFile->created_at}}</td>
                        <td><a href="{{ url('/users/'.$user->user_id) }}" class="btn btn-primary btn-sm">View Uploads</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
