<header class="mx-auto mt-20 max-w-xl text-center">
    <h1 class="text-6xl my-12 text-violet-50"><a href="/gallery">Gallery</a></h1>

    <div class="mt-4 space-y-2 lg:space-y-0 lg:space-x-4">
        <!--  Category -->
        <div class="relative rounded-xl bg-gray-100 lg:inline-flex">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="inline-flex w-full flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-left text-sm font-semibold lg:w-32">

                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                    </button>
                </x-slot>
                <x-dropdown-item href="/" :active="request()->routeIs('home')">
                    All
                </x-dropdown-item>
                @foreach ($categories as $category)
                    <x-dropdown-item
                        href="/category/{{ $category->slug }}"
                        :active="isset($currentCategory) && $currentCategory->is($category)"
                        >{{ ucwords($category->name) }}
                    </x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>



    <div
        class="relative flex items-center lg:inline-flex bg-black bg-opacity-70 shadow-black shadow-md rounded-2xl text-violet-50">
        <form method="GET" action="#">
            <input type="text" name="search" placeholder="Find something..."
                class="bg-black bg-opacity-50 text-sm font-semibold placeholder-black focus:ring-transparent border-none !outline-none focus:border-none text-center placeholder:text-violet-50 shadow-black shadow-md rounded-2xl"
                value="{{ request('search') }}">
        </form>
    </div>
    </div>
</header>
