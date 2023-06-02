@extends('master')

@section('title')
    {{ $username }}'s Files
@endsection

@section('content')
    <div class="userView">
        <div class="title">
            <h1>{{ $username }}'s Uploaded Files</h1>
        </div>

        <div class="table fileTable">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Uploaded at</th>
                        <th>File Path</th>
                        <th>To File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                        <tr>
                             <td> {{ $file->log_id     }}</td>
                             <td> {{ $file->name       }}</td>
                             <td> {{ $file->created_at }}</td>
                             <td> {{ $file->file_path  }}</td>
                             <td><a href="{{ url('/log/'.$file->log_id) }}">View File</a><td>
                         </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
