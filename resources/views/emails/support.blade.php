@component('mail::message')
# Introduction

The body of your message.

# Name

{{ $name }}

# Email to reply to

{{ $email }}

#  Message

{{ $question }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
