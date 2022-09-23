<x-layout>
    <div class="my-8">
        <a
            href="/comments/create"
            class="p-2 rounded text-white  bg-blue-400 ml-5"
        >Create Comment
        </a>
    </div>
    @foreach ($comments as $comment)
    <div class="flex items-center">

        <p class="my-3 text-blue-500"><span class="text-gray-800 mr-4">{{$comment->id}}</span>{{$comment->body}}</p>

        <a
            href="/comments/{{$comment->id}}/edit"
            class="text-green-500 ml-5"
        >edit</a>
        <x-form-button
            class="text-red-400 ml-5"
            action="{{route('comments.delete',$comment->id)}}"
            method="DELETE"
        >
            Delete
        </x-form-button>
    </div>
    @endforeach
</x-layout>