@extends('master/master')
@section('title', 'Create a BARD Trainer Profile')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <form class="form-horizontal"  method="post" enctype="multipart/form-data">
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
                    <div ><center><h2>Bangladesh Academy for Rural Development</h2>
                      <h4> Kotbari, Comilla</h4>
                    <legend><u><h3>BARD Trainers Information Sheet</h3></u></legend>
					 
						</center>  <br/>   
					</div>
                        
                            
                    <div class="form-group" >
                        <label for="name" class="col-lg-2 control-label">Name*:</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Gender*</label>
                        <div class="col-lg-4">
                            <input type="radio" class=""  name="gender" value="Male" >Male
                            <input type="radio" class=""  name="gender" value="Female">Female
                        </div>
                        
                    </div>
               
                    <div class="form-group">
                        <label for="eduQualification" class="col-lg-2 control-label">Educational Qualification</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="eduQualification" placeholder="Educational Qualification" name="educational_qualification">
                        </div>
					 </div>

                     
					 <div class="form-group">
                        <label for="skillSet" class="col-lg-2 control-label">	Skill Set</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="skillSet" placeholder="Skill Set" name="skill_set">
                        </div>
					 </div>	
						
						<div class="form-group">
                        <label for="preExperience" class="col-lg-2 control-label">Previous Experience</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="preExperience" placeholder="Previous Experience" name="previous_experience">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="dob" class="col-lg-2 control-label">Date of Birth</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="dob" placeholder="Date of Birth" name="date_of_birth">
                        </div>
                      </div>
					
					<div class="form-group">
                        <label for="cellNumber" class="col-lg-2 control-label">Cell Number</label>
                        <div class="col-lg-5">
                            <input type="number" class="form-control" id="cellNumber" placeholder="Cell Number" name="cell_number">
                        </div>
                      </div>

					  <div class="form-group">
                        <label for="email" class="col-lg-2 control-label">Email*</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="country" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="country" placeholder="Country" name="country">
                        </div>
                      </div>
                         
                          <div class="form-group">
                          <label for="image"  class="col-lg-2 control-label">Choose an image</label>
                           <div class="col-lg-5">
                          <input name="image" type="file" id="Image" name='image'>
                        </div>
                            
                    

                    <div class="form-group">
                        <div class="col-lg-5 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection 
