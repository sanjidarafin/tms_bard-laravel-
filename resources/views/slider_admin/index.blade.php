@extends('admin/layouts/master')
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
		<div class="col-md-9">
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
						<td>
							<form method="post" action="{{ URL::to('/increase_slider_position/'.$slider->position) }}">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<button type="submit" class="btn btn-success">+</button>
							</form>
							<form method="post" action="{{ URL::to('/decrease_slider_position/'.$slider->position) }}">
								<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<button type="submit"  class="btn btn-info">-</button>
							</form>
						</td>
					</tr>
                @endforeach
				</tbody>

			</table>
		</div>

	</div>
@endsection