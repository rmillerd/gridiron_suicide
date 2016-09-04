@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Import</div>
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
                {!! Form::open(array('action' => 'UploadController@process', 'files' => true, 'class'=> 'form-horizontal')) !!}
                    <div class="form-group">
                         {{ Form::label('league', 'League', ['class' => 'col-md-4 control-label']) }}
                         <div class="col-md-6">
                         {{ Form::select('league', $leagues, null, ['class' => 'form-control']) }}
                         </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('file', 'File', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                        {{ Form::file('file', ['class' => 'form-control']) }} 
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
