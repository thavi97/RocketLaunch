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
      Hello!
    {!! Form::open(array('route' => 'home.store', 'enctype' => 'multipart/form-data')) !!}
      <input type="text" name="launch_year">
      <button type="submit">Submit</button>
    {!! Form::close() !!}
    </body>
</html>
