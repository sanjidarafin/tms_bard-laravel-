@extends('master.trainee_master')
@section('title', 'Trainee')
@section('content')
 <div class="container col-md-8 col-md-offset-2">
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
                    <legend><strong>Update Trainee Information</strong></legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="name" value="{!! $info->name !!}">
                            Gender:<input class="form-control"  id="content" name="gender" value="{!! $info->gender!!}">
                        </div>
                        
                    </div>

                    

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Trainee Id</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="trainee_id" value="{!! $info->trainee_id !!}">
                           Institution: <input class="form-control"  id="content" name="institution" value="{!! $info->institution !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Educational Qualification</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="educational_qualification" value="{!! $info->educational_qualification !!}">
                            Service Experience:<input type="text" class="form-control" id="title" name="service_experience" value="{!! $info->service_experience !!}">
                            Experience Year:<input class="form-control"  id="content" name="experience_year" value="{!! $info->experience_year !!}">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Date Of Birth</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="date_of_birth" value="{!! $info->date_of_birth !!}">
                            Birth Place:<input class="form-control"  id="content" name="birth_place" value="{!! $info->birth_place !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Joining Date</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" placeholder="dd/mm/yy" name="join_date" value="{!! $info->join_date !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Father's Name/Husband's Name</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="guardians_name" value="{!! $info->guardians_name !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Permanent Address</label>
                        
                        <div class="col-lg-10">
                            Village:<input class="form-control"  id="content" name="village" value="{!! $info->village !!}">
                            Post Office:<input class="form-control"  id="content" name="post_office" value="{!! $info->post_office !!}">
                            Sub District:<input class="form-control"  id="content" name="sub_district" value="{!! $info->sub_district !!}">
                            District:<input class="form-control"  id="content" name="district" value="{!! $info->district !!}">
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Present Service Station</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="service_station" value="{!! $info->service_station !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Marital Status</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="marital" value="{!! $info->marital !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            Home:<input class="form-control"  id="content" name="ph_home" value="{!! $info->ph_home !!}">
                            Office:<input class="form-control"  id="content" name="ph_office" value="{!! $info->ph_office !!}">
                            Mobile:<input class="form-control"  id="content" name="ph_mobile" value="{!! $info->ph_mobile !!}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Diseases</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="diseases" value="{!! $info->diseases !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Sports</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="soprts" value="{!! $info->soprts !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Interested in game</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="interested_game" value="{!! $info->interested_game !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Hobby</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="hobby" value="{!! $info->hobby !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Expertise</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="expertise" value="{!! $info->expertise !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Height</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="height" value="{!! $info->height !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Weight</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="weight" value="{!! $info->weight !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Waist/Abdomen</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="waist_abdomen" value="{!! $info->waist_abdomen !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Chest</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="chest" value="{!! $info->chest !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Weight at the end of course</label>
                        <div class="col-lg-10">
                            <input class="form-control"  id="content" name="weight_end_course" value="{!! $info->weight_end_course !!}">
                        </div>
                    </div>

                   

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit"class="btn btn-info">Cancel</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection