<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <header> <a href="{{route('plates.index')}}">Home</a> </header>

    @yield('content')

    <footer> Sono Footer </footer>

</body>
</html>