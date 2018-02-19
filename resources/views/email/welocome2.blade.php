@component('mail::message')
# Welcome to Our Website

Please checkout our __website__ soon.

@component('mail::button', ['url' => 'http://google.com'])
Go to google
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
