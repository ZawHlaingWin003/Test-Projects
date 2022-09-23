<x-layout>
    <x-navbar></x-navbar>
    <x-form
        action="/comments/store"
        method="POST"
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
            ></textarea>

            @error('body')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                submit
            </button>
        </div>
    </x-form>
</x-layout>
