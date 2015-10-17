@extends('master.master')
@section('title', 'Announcement')
<style>

    hr{
        background-color: purple;
    }

    div {
        text-align: justify;
        text-justify: inter-word;
    }

    label{
        color: #00695C;
        font-size: larger;
    }

    b{
        font-size: larger;
    }

</style>

@section('content')
    <div class="container col-md-10 col-md-offset-1">
        <div class="well well bs-component">
            <div class="content">

                <div class="well well bs-component" style="background-color: #4DB6AC; color: white;">
                    <b>{!! $announcement->heading !!}</b></br><br>
                    <b>Published On:&nbsp;{!! $announcement->created_at  !!}</b>
                </div>

                <div class="well well bs-component">
                    <label>Description</label><hr>
                    <p>{!! $announcement->content !!}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection