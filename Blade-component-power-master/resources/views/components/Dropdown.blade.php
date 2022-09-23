<div
    x-data="{ dropdownOpen: false }"
    class="relative my-32 "
>
    {{$dropdownBtn}}
    <div
        x-show="dropdownOpen"
        @click="dropdownOpen = false"
        class="fixed inset-0 h-full w-full z-10"
    ></div>

    <div
        x-show="dropdownOpen"
        x-transition:enter="ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
        class="absolute {{$alignment ?? 'right' }}-0  mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20"
    >

        {{$slot}}
    </div>
</div>