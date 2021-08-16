<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="siteheader container">
        @include('inc.navbar')
    </div>
    <div class="welcomepage mt-5">
        @if (Request::is('/'))
            @include('inc.hero')
        @endif
    </div>
    <div class="sitecontent container mt-5">
        @include('inc.messages')
        <div class="row">
            <div class="col-sm-12 col-md-8 mb-5">
                @yield('content')
            </div>
            <div class="col-sm-12 col-md-4 mb-5">
                @include('inc.aside')
            </div>
        </div>
    </div>
    <div class="sitefooter">
        @include('inc.footer')
    </div>
</body>

</html>
