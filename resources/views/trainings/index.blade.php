@extends('admin.layouts.master')
@section('title', 'Trainings')

    <style>
        td:hover{
            background-color: #E6EE9C;
        }
    </style>
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #26A69A;">
                <h2 align="center">Trainings</h2>
            </div>
            @if ($trainings->isEmpty())
                <p> There is no available trainings.</p>
            @else
                <table class="table table-hover">
                    <thead>
                    <tr style="color: darkseagreen">
                        <td><h3>Training Name</h3></td>
                        <td align="right"><h3>Status</h3></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trainings as $training)
                        <tr class="success">
                            <td><label><a href="{!! action('TrainingsController@show', $training->id) !!}" style="font-size: larger;">{!! $training->training_name !!}</a></label></td>
                            <td><a href="{!! action('TrainingsController@statusUpdate', $training->id) !!}" class="btn btn-info" style="float: right;background-color: {!! $training->status ? '#1DE9B6':'#E53935' !!}">{!! $training->status ? "Active":"Inactive" !!}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            <div class="clearfix"></div>


        </div>
    </div>
    </div>
@endsection