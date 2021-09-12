@extends('layouts.app')
   
@section('content')
<div class="container">
	<div class="row">
		<h2>Messurements</h2>
	</div>
	<div class="row">
		<form class="form-horizontal col-md-10" method="POST" action="{{ route('readings.store') }}">
			@csrf
			<div class="form-group row">
				<label for="ph" class="col-sm-2 col-form-label">PH</label>
				<div class="col-sm-10">
					<input type="text" class="col-sm-2 form-control" id="ph" name="ph">
				</div>
			</div>
			<div class="form-group row">
				<label for="high_range_ph" class="col-sm-2 col-form-label">Hight Range PH</label>
				<div class="col-sm-10">
					<input type="text" class="col-sm-2 form-control" id="high_range_ph" name="high_range_ph" >
				</div>
			</div>
			<div class="form-group row">
				<label for="ammonia" class="col-sm-2 col-form-label">Ammonia</label>
				<div class="col-sm-10">
					<input type="text" class="col-sm-2 form-control" id="ammonia" name="ammonia" >
				</div>
			</div>
			<div class="form-group row">
				<label for="nitrite" class="col-sm-2 col-form-label">Nitrite</label>
				<div class="col-sm-10">
					<input type="text" class="col-sm-2 form-control" id="nitrite" name="nitrite" >
				</div>
			</div>
			<div class="form-group row">
				<label for="nitrate" class="col-sm-2 col-form-label">Nitrate</label>
				<div class="col-sm-10">
					<input type="text" class="col-sm-2 form-control" id="nitrate" name="nitrate">
				</div>
			</div>
			<div class="form-check row">
				<input class="form-check-input" type="checkbox" value="1" name="water" id="water">
				<label class="form-check-label" for="water">
				  Water changed
				</label>
			  </div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection