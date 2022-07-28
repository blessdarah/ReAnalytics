@component('mail::message')
# Contact message
Hello, my name is {{ $name }},
{{ $message }}

Thanks,<br>
Contact email: {{$email}}
@endcomponent
