@extends('layouts.app')

@section('content')
<div class="panel-body">
    <div class="jumbotron">
        <h1>{{ $league->name }} - {{ $week->name }}</h1>
        {{ $week->startDate->format('m/d/Y h:m')  }} to {{ $week->endDate->format('m/d/Y h:m') }}
    </div>
@if (count($games) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Games</h4>
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
                        @foreach ($games as $game)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('GameController@details', [
                                                    'league_name' => $league->name,
                                                    'season' => $week->season_id,
                                                    'week' => $game->week_id,
                                                    'game' => $game->id,
                                                    ]) }}">
                                                    {{ $game->visitTeam->name }} 
                                                    at {{ $game->homeTeam->name }}
                                                    <br/>Game Time: {{ $game->gameTime->format('m/d/Y h:m')  }} </a>
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
@if (count($picks) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Picks</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Pick
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
                        @foreach ($picks as $pick)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('PickController@details', [
                                                    'league_name' => $league->name,
                                                    'season' => $week->season_id,
                                                    'week' => $week->id,
                                                    'pick' => $pick->id,
                                                    ]) }}">{{ $pick->user->name }} picks {{ $pick->team->name }} </a>
                                    </div>
                                </td>
                                <td>
                                     &nbsp;<!-- TODO: Delete Button 
                                    <button type="button" class="btn btn-sm btn-info">Edit</button>
                                    <button type="button" class="btn btn-sm btn-danger">Delete</button>-->
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