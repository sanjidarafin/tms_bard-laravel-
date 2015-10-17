@extends('master/master')
@section('title', 'upload a slider image')
@section('content')
    <section class="content-2 col-12" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Add a Slider image 2</h2>
                <br><br>
                <div class="well">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        @if(session('status'))
                            <p class="alert alert-success">{{ session('status') }}</p>
                        @endif
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <fieldset>
                            <br>
                            <div class="form-group">
                                <label for="heading_text" class="col-lg-2 control-label">Heading Text</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="heading_text" placeholder="Heading Text" name="heading_text">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="paragraph_text" class="col-lg-2 control-label">paragraph Text</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="paragraph_text" placeholder="paragraph text" name="paragraph_text">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="button_text" class="col-lg-2 control-label">Button Text</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="button_text" placeholder="Button Text" name="button_text">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="slider_image" class="col-lg-2 control-label">Upload image</label>
                                <div class="col-lg-10">
                                    <input type="file" name="slider_image">
                                </div>
                            </div>                        
                            <br>
                            <input type="submit" name="" id="">
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
