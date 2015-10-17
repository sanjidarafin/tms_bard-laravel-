@extends('master.master')
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
                    @if($FAQs->isEmpty())
                        <p>No Questions and Answer Retaled to this Training Name.</p>
                    @else
                        @foreach($FAQs as $FAQ)
                            <div class="well well bs-component">
                                <label>Question</label>
                                <p>{!! $FAQ->question !!}</p>
                                <label>Answer</label><hr>
                                <p>{!! $FAQ->answer !!}</p>
                                <h6><i>Written By</i> &nbsp; &nbsp;{!! $FAQ->author_name !!}</h6>
                            </div>
                        @endforeach

                    @endif
                </div>
                <div class="mdl-cell mdl-cell--2-col"></div>
            </div>
        </div>
    </div>
@endsection