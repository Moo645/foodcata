@props(['url'])

@php
    $default = [
        
    ];
@endphp

<a href="{{ $url }}"
    class="rounded-md bg-white/50 px-3.5 py-2.5 mx-1 my-1
        text-sm font-semibold text-white shadow-sm hover:bg-white/20 
        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 
        focus-visible:outline-indigo-600">
    {{ $slot }}
</a>
