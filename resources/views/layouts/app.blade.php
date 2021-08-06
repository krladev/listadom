<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
    @section('banner')
        @include('components.banner')
    @show    

    <div class="container">
        @yield('content')
    </div>    
</body>
</html>
