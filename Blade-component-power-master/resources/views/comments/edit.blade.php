<x-layout>
    <x-form
        action="/comments/{{$comment->id}}/update"
        method="PATCH"
    >
        <div class="mb-6">
            <label
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
                for="body"
            >
                body
            </label>

            <textarea
                class="border border-gray-400 p-2 w-full"
                name="body"
                id="body"
                required
            >{{$comment->body}}</textarea>

            @error('body')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                update
            </button>
            <a
                href="/comments"
                class="bg-gray-400 text-white rounded  px-5 py-3 hover:bg-gray-600"
            >Back</a>
        </div>
    </x-form>
</x-layout>