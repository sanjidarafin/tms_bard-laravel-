@extends('admin.layouts.master')
@section('title', 'View Information')

    <style>
        label{
            color: green;
            font-size: larger;
        }
        hr{
            background-color: purple;
        }

        h5{
            font-family: Arial;
            font-size: larger;
        }


    </style>
@section('content')
    <div class="container">
        <div class="well well bs-component">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    <div class="well" style="background-color: darkseagreen;">
                            <h3 align="center">Trainings List</h3>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    <div class="well well bs-component">
                        @if ($trainings->isEmpty())
                            <p> There is no available trainings.</p>
                        @else
                            <div>
                                @foreach($trainings as $training)
                                    <h5><a href="{!! action('TrainingsController@show', $training->id) !!}">{!! $training->training_name !!}</a><h6><a href="{!! action('TrainingsController@statusUpdate', $training->id) !!}" class="btn btn-info" style="float: right;background-color: {!! $training->status ? "navy":"red" !!}">{!! $training->status ? "Active":"Inactive" !!}</a></h6></h5>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </div>
    </div>
@endsection