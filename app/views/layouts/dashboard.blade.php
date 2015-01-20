<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        @section('head')
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap_theme.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/dataTablesBootstrap.css') }}" media="screen" />
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
        @show
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Time Tracker</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container container-main">
            <div class="row">
                <div class="col-xs-3">
                    @yield('left-col')
                </div>
                <div class="col-xs-6">
                    @yield('center-col')
                </div>
                <div class="col-xs-3">
                    @yield('right-col')
                </div>
            </div>
        </div>
        <footer class="container">
            <p>Copyright &copy; <?= date('Y') ?> Hollen-B</p>
        </footer>
    </body>
</html>