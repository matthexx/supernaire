@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{-- @component('mail::message') --}}

Hello 

Thank you for registering!

{{-- @component('mail::button', ['url' => $verifyUrl ?? ''])
Verify Email
@endcomponent --}}


{{-- <a href="{{url($verifyUrl)}}" class="btn btn-primary" >Verify Email</a> --}}



Regards,<br>
{{ config('app.name') }}

{{-- @endcomponent --}}

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
