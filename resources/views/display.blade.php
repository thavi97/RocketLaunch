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
    <div>
      {{$launch_details['launch_date']}}
    </div>
    <br>
    <div>
      {{$launch_details['rocket_name']}}
    </div>
    <br>
    <div>
      {{$launch_details['long_launch_site_name']}}
    </div>
    <br>
    <div>
      {{$launch_details['details']}}
    </div>
    </body>
</html>
