@extends('master.master')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <center><h1>Trainee Course Relationship</h1></center>
        <div class="well well bs-component">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {!! Form::open(['route'=>'traineeCourse.store'])!!}

            <div class="form-group">
                {!! Form::label('course_id','Subject')!!}
                {!! Form::select('course_id', $courses, null,['class' => 'form-control'])!!}
            </div>

            <div class="form-group">
                @foreach($trainees as $id=>$trainee)
                    {!! Form::checkbox($trainee, $id) !!}{{$trainee}}<br>
                @endforeach
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection