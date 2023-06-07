@props(['trigger'])

<x-dropdown>
    <x-slot name="trigger">
        <button class="inline-flex w-full flex-1 bg-transparent py-1 px-12 text-lg font-semibold text-center mx-auto items-center justify-center">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="ml-2"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #fafafa
                    }
                </style>
                <path d="M384 432c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0zm64-16c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320zM224 352c-6.7 0-13-2.8-17.6-7.7l-104-112c-6.5-7-8.2-17.2-4.4-25.9s12.5-14.4 22-14.4l208 0c9.5 0 18.2 5.7 22 14.4s2.1 18.9-4.4 25.9l-104 112c-4.5 4.9-10.9 7.7-17.6 7.7z" />
            </svg>
        </button>
    </x-slot>
    <x-dropdown-item href="/gallery/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
    <x-dropdown-item href="/gallery/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" active:="request()->is('categories/{$category->slug}')">
        {{ ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach
</x-dropdown>