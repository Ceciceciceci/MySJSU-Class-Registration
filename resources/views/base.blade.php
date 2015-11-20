<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome to MySJSU</title>

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
                background-color: aqua;
            }
        </style>
        <!-- Latest compiled and minified CSS -->
        
     
     <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
    
    </head>
    <body>
       <!-- <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <a class="navbar-brand" href="{{ action('SiteController@index') }}"><!--MySJSU--></a>
              <!-- </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form" method="POST" action="{{ action('SiteController@login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <input name="sjsu_id" type="text" placeholder="SJSU ID" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>-->
               <!-- </div>--><!--/.navbar-collapse -->
           <!-- </div>-->
       <!-- </nav>-->


        <div class="container">
            <!-- Example row of columns -->
            @yield('main')
        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="style.css" />
    </body>
</html>
