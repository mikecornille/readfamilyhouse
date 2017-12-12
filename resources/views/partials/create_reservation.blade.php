<div class="row">
	<div class="col-md-3">
	  	{{ Form::label('start_date', 'Arrival Date') }}
	  	{{ Form::text('start_date', null, ['class' => 'form-control']) }}
	</div>
	<div class="col-md-3">
		{{ Form::label('end_date', 'Departure Date') }}
	  	{{ Form::text('end_date', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="row">
	<div class="col-md-6">
	  	{{ Form::label('guests', 'Guests and Notes') }}
	  	{{ Form::textarea('guests', null, ['class' => 'form-control']) }}
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		{{ Form::label('guest_count', 'Total Guests') }}
	  	{{ Form::selectRange('guest_count', 1, 25, ['class' => 'form-control']) }}
	</div>
</div>

{{ Form::submit($submitButtonText, ['class' => 'form-control btn btn-primary', 'style' => 'margin-top: 15px;']) }}





	

