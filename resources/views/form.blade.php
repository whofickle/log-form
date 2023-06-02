<!doctype html>
<html lang="en">
<head>
    <title>LogCloud | Manual Input</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<form action="{{ url('/') }}" method="post" enctype="multipart/form-data">
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
</body>
</html>
