@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'google.com'])
EMAIL
@endcomponent
{{ $dados->name }} <br>
{{ $dados->email }} <br>
{{ $dados->subject }} <br>
{{ $dados->message }} <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
