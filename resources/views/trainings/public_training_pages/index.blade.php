@extends('master.master')
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
                            <label><h4>Ongoing Training</h4></label><hr>
                            <div>
                                 @if ($ongoingTrainings->isEmpty())
                                     <p> There is no available On going trainings.</p>
                                 @else
                                    @foreach($ongoingTrainings as $training)
                                        <img src="{{ asset( $training->image_path) }}" width="100" height="100">
                                        <h5>{!! $training->training_name !!}<a href="{!! action('TrainingsController@publicShow', $training->id) !!}" class="btn btn-info" style="float: right;">VIEW</a></h5>
                                    @endforeach
                                 @endif
                            </div>

                            <label><h4>Upcoming Training</h4></label><hr>
                            <div>
                                @if ($upcomingTrainings->isEmpty())
                                    <p> There is no available Up coming trainings.</p>
                                @else
                                    @foreach($upcomingTrainings as $training)
                                        <img src="{{ asset( $training->image_path) }}" width="100" height="100">
                                        <h5>{!! $training->training_name !!}<a href="{!! action('TrainingsController@publicShow', $training->id) !!}" class="btn btn-info" style="float: right;">VIEW</a></h5>
                                    @endforeach
                                @endif
                            </div>

                            <label><h4>Past Training</h4></label><hr>
                            <div>
                                @if ($pastTrainings->isEmpty())
                                    <p> There is no Past trainings.</p>
                                @else
                                    @foreach($pastTrainings as $training)
                                        <img src="{{ asset( $training->image_path) }}" width="100" height="100">
                                        <h5>{!! $training->training_name !!}<a href="{!! action('TrainingsController@publicShow', $training->id) !!}" class="btn btn-info" style="float: right;">VIEW</a></h5>
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </div>
    </div>
@endsection