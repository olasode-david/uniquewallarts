@component('mail::message')
# Contacting for help

# My name is {{$name}}

# Message

{{$message}}

# Email address to reply to

{{$email}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
