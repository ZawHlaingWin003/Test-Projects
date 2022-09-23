@php
$active=request()->routeIs($route) ? 'bg-gray-900':'';
@endphp
<a
    href="{{route($route)}}"
    {{-- {{
        $attributes->merge([
        'class'=>$active.' text-white px-3 py-2 rounded-md text-sm font-medium'
        ])
    }} --}}
    class='{{ $active }} text-white px-3 py-2 rounded-md text-sm font-medium'
>{{$slot}}</a>
