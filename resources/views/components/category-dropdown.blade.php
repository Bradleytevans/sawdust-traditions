<x-dropdown>
    <x-slot name="trigger">
        <button
            class="inline-flex w-full flex-1 appearance-none bg-transparent py-2 px-16 text-sm font-semibold text-center mx-auto justify-items-center">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

        </button>
    </x-slot>
    <x-dropdown-item href="/gallery/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item
            href="/gallery/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            active:="request()->is('categories/{$category->slug}')">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
