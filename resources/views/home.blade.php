<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Bootstrap</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                Menu
            </div>
            <div class="col-sm">
                <h1>Hello World!</h1>

                <hr>
            </div>
        </div>
    </div>
</body>
</html>
