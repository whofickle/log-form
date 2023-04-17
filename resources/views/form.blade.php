<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<form action="{{ url('handler') }}" method="post" enctype="multipart/form-data">
    <label for="imgUpload">picture please:</label>
    <input type="file"
           id="imgUpload" name="imgUpload">
    <br>

    <label for="siteName">sitename if you could:</label>
    <input type="text" id="siteName" name="siteName">

    <label for="token">token plz:</label>
    <input type="text" id="token" name="token">

    <input type="submit">
</form>
</body>
</html>
