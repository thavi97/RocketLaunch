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
      {{$launch_details['0["launch_date_local"]']}}<br>
      {{$launch_details['0["rocket_name"]']}}<br>
      {{$launch_details['0["long_launch_site_name"]']}}<br>
      {{$launch_details['0["details"]']}}<br>
    </body>
</html>
