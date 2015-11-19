<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MySJSU</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/base.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top sjsu-container-prime" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand sjsu-secondary" style="margin-top: -10px;" href="{{ action('SiteController@index') }}">
                        <img style="display:inline-block; max-width:40px;" src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/San_Jose_State_Spartans_Logo.svg/996px-San_Jose_State_Spartans_Logo.svg.png" alt="">
                        San Jose State University
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    @yield('navbar-right')
                </div><!--/.navbar-collapse -->
            </div>
        </nav>


        <div class="container">
            <!-- Example row of columns -->
            @yield('main')
        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
