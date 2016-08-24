@extends('layouts.app')

@section('content')
<div class="panel-body">
    <div class="jumbotron">
        <h1>{{ $league->name }} - {{ $week->name }}</h1>
    </div>
@if (count($matchups) > 0)
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
                        @foreach ($matchups as $matchup)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('MatchupController@details', [
                                                    'league_name' => 'NFL',
                                                    'season' => $week->season_id,
                                                    'week' => $matchup->week_id,
                                                    'matchup' => $matchup->id,
                                                    ]) }}">Visitor at Home</a>
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
</div>
@endsection