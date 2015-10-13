@extends('admin.layouts.master')
@section('title', 'View a announcement')
    <style>
        label{
            color: green;
            font-size: larger;
        }


        hr{
            background-color: purple;
        }
    </style>

@section('content')
    <div class="container">
        <div class="well well bs-component">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col"></div>
                <div class="mdl-cell mdl-cell--8-col">
                    <div class="well well bs-component" style="background-color: darkseagreen;color:#ffffff">
                        <b style="font-size: 30">{!! $announcement->heading !!}</b></br></br>
                        <label style="color: #ffffff">Published On:&nbsp;{!! $announcement->created_at  !!}</label>
                    </div>
                    <div>
                        <div class="well well bs-component">
                            <label>Description</label><hr>
                            <p>{!! $announcement->content !!}</p>
                        </div>
                    </div>

                    <a href="{!! action('AnnouncementController@edit', $announcement->id) !!}" class="btn btn-info pull-left">Edit</a>
                    <form method="post" action="{!! action('AnnouncementController@destroy', $announcement->id) !!}" class="pull-left">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <div class="form-group">
                            <div>

                                <button type="submit" class="btn btn-warning">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </div>
    </div>
@endsection