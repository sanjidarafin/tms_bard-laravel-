@extends('admin.layouts.master')
@section('title', 'View a FAQs')
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
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($FAQs->isEmpty())
                        <p>No Questions and Answer Retaled to this Training Name.</p>
                    @else
                        @foreach($FAQs as $FAQ)
                            <div class="well">
                                <label>Question</label>
                                <p>{!! $FAQ->question !!}</p>
                                <label>Answer</label><hr>
                                <p>{!! $FAQ->answer !!}</p>
                                <h6><i>Written By</i> &nbsp; &nbsp;{!! $FAQ->author_name !!}</h6>
                                    <a href="{!! action('FAQsController@edit', $FAQ->id) !!}" class="btn btn-info pull-right">Edit</a>
                                    <form method="post" action="{!! action('FAQsController@destroy', $FAQ->id) !!}" class="pull-right">
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                @endforeach
                            </div>
                                @endif
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </div>
    </div>
@endsection