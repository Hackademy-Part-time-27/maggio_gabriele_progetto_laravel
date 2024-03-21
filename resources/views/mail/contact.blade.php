<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>New mail arrived, let's see who wrote you! {{config('app.name')}}</p> <br>
<p>Email:{{$email}}</p>
<p>Message:{!! nl2br(e($content))!!} </p>
</body>
</html>