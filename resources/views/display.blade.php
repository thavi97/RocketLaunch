<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      @foreach($launch_details as $detail)
      {{$detail['launch_date_local']}}<br>
      {{$detail['rocket_name']}}<br>
      {{$detail['long_launch_site_name']}}<br>
      {{$detail['details']}}<br>
      <br><br>
      @endforeach
    </body>
</html>
