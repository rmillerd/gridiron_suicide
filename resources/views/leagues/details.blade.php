@extends('layouts.app')

@section('content')
<div class="panel-body">
    <div class="jumbotron">
        <h1><a href="{{ url($league->URL) }}" target="_blank">{{ $league->name }}</a></h1>
    </div>
@if (count($seasons) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Seasons</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Season
                    </a>
                </div>
                    
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings 
                    <thead>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </thead>
                    -->
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($seasons as $season)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('SeasonController@details', [
                                                    'league_name' => $league->name,
                                                    'season_id' => $season->id,
                                                    ]) }}">{{ $season->name}}</a>
                                    </div>
                                </td>
                                <td>
                                     &nbsp;<!-- TODO: Delete Button -->
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
    @if (count($teams) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Teams</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Team
                    </a>
                </div>
                    
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings
                    <thead>
                        <th>Teams</th>
                        <th>&nbsp;</th>
                    </thead> -->

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('TeamController@details', [
                                                    'league_name' => $league->name,
                                                    'team_id' => $team->id,
                                                    ]) }}">{{ $team->name }}</div>
                                </td>

                                <td class="text-nowrap">
                                     &nbsp;<!-- TODO: Delete Button -->
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection