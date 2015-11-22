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
    @if ($errors->has())
        <div style="position:relative;top:10px;background-color:white" class="pull-right text-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div id="main-content" class="col-xs-12">

        </div>
    </div>
@endsection