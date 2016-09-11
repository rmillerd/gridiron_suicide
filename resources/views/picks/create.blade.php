@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Pick</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<!--                    @if ($errors->has('file'))
                        <div class="alert alert-danger"><span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                            </span></div>
                    @endif
-->
                {!! Form::open(array('action' => 'PickController@store', 'class'=>'form-horizontal')) !!}
                {{ Form::hidden('season', $season) }}
                {{ Form::hidden('week', $week) }}
                <fieldset disabled>
                    <div class="form-group">
                        {{ Form::label('season', 'Season', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{Form::text('season', $season, ['class' => 'form-control'] )  }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('week', 'Week', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{Form::text('week', $week, ['class' => 'form-control'] )  }}
                        </div>
                    </div>
                </fieldset>
                    <div class="form-group">
                         {{ Form::label('user', 'User', ['class' => 'col-md-4 control-label']) }}
                         <div class="col-md-6">
                         {{ Form::select('user', $users, null, ['class' => 'form-control']) }}
                         </div>
                    </div>
                    <div class="form-group">
                         {{ Form::label('team', 'Team', ['class' => 'col-md-4 control-label']) }}
                         <div class="col-md-6">
                         {{ Form::select('team', $teams, null, ['class' => 'form-control']) }}
                         </div>
                    </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                  {{ Form::submit('Submit', array('class' => 'btn btn-primary'))}}
                    </div>
                </div>
                  {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection
