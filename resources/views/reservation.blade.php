@extends('layouts.app')

@section('content')

<div class="container">
<h2 class="text-center" style="font-family: 'Raleway', sans-serif; font-weight: bold;"><u>Reservations</u></h2>
@if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session('status') }}</strong> Click the X at the far right to close this notification.
    </div>
@endif

<div class="row">        
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
                <thead class="cf">
                    <tr>

                        <th class="numeric">Arrival</th>
                        <th class="numeric">Departure</th>
                        <th class="numeric">Email All</th>
                        <th class="numeric">Creator</th>
                        <th class="numeric">Guest Count</th>
                        <th class="numeric">Guests</th>
                        <th class="numeric">Created</th>
                        <th class="numeric">Edit</th>
                        <th class="numeric">Delete</th>
                  
                        
                    </tr>
                </thead>
                
                
                <tbody>
                    

                	@foreach ($res as $r)
                    <tr>

						<td data-title="Arrival">{{ date("l M j, Y", strtotime($r->start_date)) }}</td>
						<td data-title="Departure">{{ date("l M j, Y", strtotime($r->end_date)) }}</td>
                        <td data-title="Email All"><a class="btn btn-info" href="{{ URL::to('/email/' . $r->id) }}">Email</a></td>
						<td data-title="Creator">{{ $r->user_name }}</td>
						<td data-title="Guest Count">{{ $r->guest_count }}</td>
						<td data-title="Guests">{{ $r->guests }}</td>
                        <td data-title="Created At">{{ date("l M j, Y", strtotime($r->created_at)) }}</td>
						<td data-title="Edit">{!! Html::linkRoute('reservation.edit', 'Edit', array($r->id), ['class' => 'btn btn-success btn-block']) !!}</td>
						<td data-title="Delete">{!! Form::open(['route' => ['reservation.destroy', $r->id], 'method' => 'DELETE']) !!}
		                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
		                    {!! Form::close() !!}</td>
                    </tr>
                    @endforeach
                

                </tbody>
               
            
            </table>
        </div>
    </div>

</div>

@endsection