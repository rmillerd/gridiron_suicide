@extends('layouts.master')

@section('title', 'Login')

@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Albert's NFL Suicide Pool</h1>
      </div>
<form action="{{ url('login') }}" method="POST">
            {{ csrf_field() }}
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <!--<label class="control-label" for="focusedInput">Username</label>-->
                
                <input type="text" class="form-control" id="username" placeholder="Usename">
              </div>
              <div class="form-group">
                
                <!--<label class="control-label" for="focusedInput">Password</label>-->
                <input type="password" class="form-control" id="Password" placeholder="Password">
              </div> 
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-default">Login</button>
            </div>
          </div>
</form>
@endsection