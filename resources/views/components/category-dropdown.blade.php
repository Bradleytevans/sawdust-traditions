<x-dropdown>
    <x-slot name="trigger">
        <button
            class="inline-flex w-full flex-1 appearance-none bg-transparent py-2 px-16 text-sm font-semibold text-center mx-auto justify-items-center">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

        </button>
    </x-slot>
    <x-dropdown-item href="/" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($categories as $category)
        <x-dropdown-item href="/gallery/?category={{ $category->slug }}"
            :active="isset($currentCategory) && $currentCategory->is($category)">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
