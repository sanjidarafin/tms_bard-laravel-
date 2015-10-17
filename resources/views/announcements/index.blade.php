@extends('admin.layouts.master')
@section('title', 'View all Announcements')

@section('content')

    <div class="container col-md-10 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #4DB6AC; color: white;">
                <h2> Announcements </h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($announcement->isEmpty())
                <h2>No Announcements </h2>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th><font size="3" color="black">Announcement Title</font></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcement as $announcement)
                        <tr>
                            <td>
                                <a href="{!! action('AnnouncementController@show', $announcement->id) !!}">{!! $announcement->heading !!} &nbsp;&nbsp; Publish on {!! $announcement->created_at !!} </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
