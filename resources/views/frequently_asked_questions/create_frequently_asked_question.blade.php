@extends('admin.layouts.master')
@section('title', 'Create FAQS')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component" style="background-color:seagreen; color:white; font-size:larger" align="center"><h1>Frequently Asked Questions</br>(FAQs)</h1></div>
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <label for="inputName" class="control-label"><font color="#556b2f" size="5">Training Name</font></label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="inputList" class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <select class="form-control" name="training_id">
                                    @foreach($training_names as $training_name)
                                        <option value="{!! $training_name->id !!}"> {!! $training_name->training_name !!}</option>
                                    @endforeach
                                </select>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"><font color="#556b2f" size="3">Auther Name</font></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Auther name" name="author_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"><font color="#556b2f" size="3">Question</font></label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Question?" name="question">
                        </div>
                    </div>
                    </br>
                    </br>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label"><font color="#556b2f" size="3">Answer</font></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="4" id="answer" placeholder="Write answer" name="answer"></textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection