@extends('layouts.login')

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        {{ Form::open(array('url' => 'login')) }}
            @if($errors->has())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    {{ $error }}<br/>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                {{ Form::label('email', 'Email Address') }}
                {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control input-sm' )) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', array('class' => 'form-control input-sm')) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Submit', array('class'=>'btn btn-primary btn-block')) }}
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop