@component('mail::message')
# Introduction

Welcome to the site {{ $user->name }}

@component('mail::button', ['url' => url('user/verify', $token)])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
