<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title> @yield('title') </title>
</head>
<body class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Tasks App</h1>

        <div class="col-10">

            <div class="container">
                @yield('content')
            </div>

        </div>
    </div>
</body>
</html>
