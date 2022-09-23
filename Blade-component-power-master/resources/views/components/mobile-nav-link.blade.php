@php
$active=request()->routeIs($route) ? 'bg-gray-900':'';
@endphp
<a
    href="{{route($route)}}"
    {{$attributes->merge(['class'=>$active.' text-white block px-3 py-2 rounded-md text-base font-medium'])}}
    aria-current="page"
>{{$slot}}</a>