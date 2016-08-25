@extends('layouts.app')

@section('content')
<div class="panel-body">
    <div class="jumbotron">
        <h1><a href="{{ url($team->teamURL) }}" target="_blank">{{ $team->name }}</a></h1>
    </div>
@if (count($homeGames) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Home Games</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Game
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
                        @foreach ($homeGames as $game)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('GameController@details', [
                                                    'league_name' => $league->name,
                                                    'season' => $game->season_id,
                                                    'week' => $game->week_id,
                                                    'game' => $game->id,
                                                    ]) }}">{{ $game->visitTeam->name}} vs {{ $game->homeTeam->name}}</a>
                                    </div>
                                </td><!--
                                <td>
                                     &nbsp; TODO: Delete Button 
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>-->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
    @if (count($awayGames) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Away Games</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Game
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
                        @foreach ($awayGames as $game)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('GameController@details', [
                                                    'league_name' => $league->name,
                                                    'season' => $game->season_id,
                                                    'week' => $game->week,
                                                    'game' => $game->id,
                                                    ]) }}">{{ $game->visitTeam->name}} vs {{ $game->homeTeam->name}}</a>
                                    </div>
                                </td><!--
                                <td>
                                     &nbsp; TODO: Delete Button 
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                </td>-->
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