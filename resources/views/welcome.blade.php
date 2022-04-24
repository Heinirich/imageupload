<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>IMG UPLOAD WITH CODETANK</h1>
    @if(Session::has('success'))
        <p style="color: green;">{{ Session::get('success')}}</p>
    @endif
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <p style="color: crimson;"> {{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('imgUploadPost')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="img" id="img">

        <button type="submit">UPLOAD NOW</button>
    </form>
</body>
</html>