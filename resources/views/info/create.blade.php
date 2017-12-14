@extends('layouts.app')

@section('content')

<div class="container">

	
    


@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session('status') }}</strong> Click the X at the far right to close this notification.
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h4 class="text-center" style="font-family: 'Raleway', sans-serif; font-weight: bold;"><a href="/info">Back to Info</a></h4>

<form role="form" class="form-horizontal" method="POST" action="/info">
        
        {{ csrf_field() }}

<div class="row">
    <div class="col-md-6 col-md-offset-3">
		<div class="row">
			<div class="col-md-6">
				<label for="title">Title</label>
	  			<input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}">
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-6">
				<label for="body">Content</label>
  				<textarea class="form-control" rows="5" id="body" name="body">{{ old('body') }}</textarea>
	  		</div>
		</div>
		 
<button id="new_reservation_button" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> NEW</button>
</div>
</div>

</form>
</div>

@endsection