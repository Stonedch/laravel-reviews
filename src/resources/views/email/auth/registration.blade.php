@component('mail::message')

# Welcome!

Thanks for signing up. This is the password we generated for you: **{{ $password }}**.

You can change it in your profile.

@component('mail::button', ['url' => route('login')])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

