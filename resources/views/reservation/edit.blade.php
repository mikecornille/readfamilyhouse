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

<h4 class="text-center" style="font-family: 'Raleway', sans-serif; font-weight: bold;"><a href="/reservation">Back to Reservations</a></h4>

<form role="form" class="form-horizontal" method="POST" action="/reservation/{{ $reservation->id }}">
        
        {{ method_field('PATCH') }}

        {{ csrf_field() }}

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <div class="col-md-3">
                <label for="start_date">Arrival Date</label>
                <input type="text" id="start_date" class="date form-control" name="start_date" value="{{ $reservation->start_date }}">
            </div>
            <div class="col-md-3">
                <label for="end_date">Departure Date</label>
                <input type="text" id="end_date" class="date form-control" name="end_date" value="{{ $reservation->end_date }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="guests">Guests and Notes</label>
                <textarea class="form-control" rows="5" id="guests" name="guests">{{ $reservation->guests }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="guest_count">Total Guests</label>
                <select class="form-control" id="guest_count" name="guest_count">
                    <option>{{ $reservation->guest_count }}</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                 </select>
            </div>
        </div>  
<button id="new_reservation_button" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> UPDATE</button>
</div>
</div>

</form>
</div>

@endsection