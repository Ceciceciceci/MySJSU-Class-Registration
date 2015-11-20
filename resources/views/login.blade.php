@extends('base')

@section('main')
<head>

 <style>
        #main-content {
            padding: 20px;
            height: 320px;
        }
    </style>
    </head>
    <div class="row">
        <div id="main-content" class="col-xs-12">
            <h1 class="text-center">San Jose State University</h1>
            {!! Form::open(['action' => 'SiteController@login', 'class' => 'form']) !!}
                <div class="form-group">
                    <input type="text" name="sjsu_id" class="form-control" placeholder="SJSU Id"/>
                    <input type="text" name="password" class="form-control" placeholder="Password"/>
                </div>

                <input type="submit" class="btn btn-default" />
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
@endsection