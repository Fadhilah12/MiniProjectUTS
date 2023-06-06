<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container m-5">
        <h1 class="text-center fw-bold wlcm">W E L C O M E </h1>
        <div class="text-center">
            <img src="{{ Vite::asset('images/main.png') }}" class="rounded" alt="image" width="30%">
        </div>
        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-outline-light border border-primary ">HOME</a>
        </div>
        @vite('resources/js/app.js')
</body>

</html>
