@props([
'method'=>'GET',
])
<form
    method="{{$method==='GET'?'GET':'POST'}}"
    {{$attributes}}
>
    @csrf
    @if ($method==='PATCH' || $method==="DELETE")
    @method($method)
    @endif
    {{$slot}}
</form>