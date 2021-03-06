@extends('layouts.app')

@section('content')
<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New League Form -->
        <form action="{{ url('league') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="league-name" class="col-sm-3 control-label">League</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="league-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="league-URL" class="col-sm-3 control-label">URL</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="league-URL" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add League
                    </button>
                </div>
            </div>
        </form>

   <!-- Current Leagues -->
@if (count($leagues) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Leagues
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>League</th>
                        <th>Actions&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($leagues as $league)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('LeagueController@details', [
                                                    'league_name' => $league->name,
                                                ]) }}">
                                        {{ $league->name }}</a></div>
                                </td>
                                <td>
                                     <!-- TODO: Delete Button 
                                     <a class="btn btn-sm btn-info" href="#">Edit</a>
                                     &nbsp;
                                     -->
                                     <a type="submit" class="btn btn-sm btn-info" href="#">Edit</a>
                                     <a type="submit" class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection