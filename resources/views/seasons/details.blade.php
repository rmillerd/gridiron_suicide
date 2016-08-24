@extends('layouts.app')

@section('content')
<div class="panel-body">
    <div class="jumbotron">
        <h1>{{ $season->name }}</h1>
    </div>
@if (count($weeks) > 0)
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h4 class="pull-left">Weeks</h4>
                <div class="btn-group pull-right">
                    <a class="btn btn-default pull-right" href="#">
                        <i class="fa fa-plus"></i> Add Week
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
                        @foreach ($weeks as $week)
                        <tr>
                                <!-- Season Name -->
                                <td class="table-text">
                                    <div><a href="{{ action('WeekController@details', [
                                                    'league_name' => 'NFL',
                                                    'season' => $season->id,
                                                    'week' => $week->id,
                                                    ]) }}">{{ $week->name}}</a>
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