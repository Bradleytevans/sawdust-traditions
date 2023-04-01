<header class="mx-auto max-w text-center">
    <h1 class="text-6xl my-12 text-violet-50"><a href="/gallery">Gallery</a></h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4">
        <!--  Category -->
        <div
            class="bg-black bg-opacity-50 text-sm font-semibold text-center text-violet-50 shadow-black shadow-md rounded-xl relative  lg:inline-flex">
            <x-category-dropdown></x-category-dropdown>
        </div>


        <!-- Search -->
        <div
            class="relative flex items-center lg:inline-flex rounded-2xl text-violet-50 px-2">
            <form method="GET" action="/gallery/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Find something..."
                    class="bg-black bg-opacity-50 text-sm font-semibold placeholder-black focus:ring-transparent border-none !outline-none focus:border-none text-center placeholder:text-violet-50 shadow-black shadow-md rounded-xl"
                    value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
