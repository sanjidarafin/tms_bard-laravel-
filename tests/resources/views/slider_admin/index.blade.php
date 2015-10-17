@extends('master/master')
@section('style')
	.slider_image img {
		height: 150px;
		width: auto;
	}
@endsection
@section('content')
	<script>
		function checkDelete(){
			return confirm('Are you really want to delete this slider');
		}
	</script>
<br><br>
	<div class="container">
		<div class="col-md-8">
			<table class="table slider_image">
				<tbody>
				@foreach($all_slider as $slider)
					<tr>
						<td scope="row">{{ $slider->position }}</td>
						<td><img src="{!! asset('uploads/'.$slider->slider_image) !!}"></td>
						<td>
							<form method="post" action="{{ URL::to('/slider/'.$slider->id.'/delete') }}">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<button type="submit" onclick="return checkDelete()" class="btn btn-warning">Delete</button>
							</form>
						</td>
						<td><a href="#"  class="btn btn-info">+</a> <a href="#"  class="btn btn-success">-</a></td>
					</tr>
                @endforeach
				</tbody>
				
			</table>
		</div>
		<div class="col-md-4">
			<div class="well">
				<h3>To Upload a slider image <br><a href="{{ URL::to('/slider/create') }}">Click Here</a></h3>
			</div>
		</div>
	</div>
@endsection