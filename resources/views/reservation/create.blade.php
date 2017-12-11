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

<div class="row">
    <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'reservation.store']) !!}
          		@include('partials.create_reservation', ['submitButtonText' => 'New Reservation'])
            {!! Form::close() !!}

    </div>
</div>
</div>

@endsection