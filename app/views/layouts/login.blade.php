<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    @section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap_theme.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}" media="screen" />
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
    @show
</head>
<body>
    <div class="container container-login">
        @yield('content')
    </div>
</body>
</html>