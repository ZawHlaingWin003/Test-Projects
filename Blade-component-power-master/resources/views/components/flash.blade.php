@props([
    'type'=>'success',
    'colors'=>[
        'success'=>'bg-green-400',
        'error'=>'bg-red-400',
        'warning'=>'bg-yellow-400',
    ]
])
<div  {{$attributes->merge(['class'=>"{$colors[$type]} p-4 my-5 flex justify-between"])}}>
    <div>
        <p>{{$slot}}</p>
    </div>
    <div>
        &times;
    </div>
</div>