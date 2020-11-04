@component('mail::message')
# Introduction

The body of your message.
# Guest

{{ $guest }}

# Message

{{ $message }}

# Email to reply to 

{{ $email }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
