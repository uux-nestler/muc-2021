<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Prof. Dr. Simon Nestler">

        <title>MuC 2021</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/muc.css">
    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">MuC 2021</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Route::currentRouteName() == 'overview' ? 'active' : '' }}">
                        <a class="nav-link" href="/overview">Overview</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'programs' ? 'active' : '' }}">
                        <a class="nav-link" href="/programs">Program</a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'misc' ? 'active' : '' }}">
                        <a class="nav-link" href="/misc">Misc</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->

            <div class="container tp">
                <div class="row">
                    <div class="col-12">
                        <h1>@yield('header')</h1>
                    </div>
                </div>
            </div>
                
            @yield('content')
        </main>

        <footer class="container ft">
            <p>&copy; Prof. Dr. Simon Nestler, 2020</p>
        </footer>

        @yield('scripts')
        <script src="{{ asset('/js/app.js') }}" ></script>
</html>
