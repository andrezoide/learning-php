<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
</head>

<body class="antialiased">
  <h1>
    hello world
  </h1>
  @if($name == "andre")
  <p> take your {{$juice}} {{$name}} </p> 
  @else
  <p>the juice is not for you</p>
  @endif
</body>

</html>