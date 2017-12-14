@component('mail::message')
# Reservation Notification

{{ $reservation->user_name }} and guests ({{ $reservation->guest_count }}) will arrive {{ $reservation->start_date }} and depart {{ $reservation->end_date }}.

Guests and Notes: {{ $reservation->guests }}



Thanks,<br>
{{ \Auth::user()->name }}<br>
{{ \Auth::user()->email }}
@endcomponent
