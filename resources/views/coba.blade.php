<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <h1>Halaman Route Dashboard</h1>
{{$n=1;}}
@foreach ($users as $user)
<h3>ini data ke{{$n++}}</h3>
<p>{{ $user->name }}</p>
<p>{{ $user->email }}</p>
    
@endforeach
{{-- IF USING PHP NATIVE NOT BLADE
<?php 
    foreach ($users as $user) {
        echo "<p>" . $user->name . "</p>";
        echo "<p>" . $user->email . "</p>";
    } 

?> --}}

  </body>
</html>