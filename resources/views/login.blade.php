@extends('base')

@section('navbar-right')
    {!! Form::open(['action' => 'SiteController@login', 'class' => 'form navbar-form navbar-right']) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <input name="sjsu_id" type="text" placeholder="SJSU ID" class="form-control input-sm">
        </div>
        <div class="form-group">
            <input name="password" type="password" placeholder="Password" class="form-control input-sm">
        </div>
        <button type="submit" class="btn btn-success btn-sm">Sign in</button>
    {!! Form::close() !!}
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div id="main-content" class="col-xs-12">

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