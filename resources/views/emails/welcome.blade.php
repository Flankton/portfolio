@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent
{{ $dados }}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
