@props(['product'])


<header class="">
    <h1 class="text-6xl my-12 text-violet-50"><a href="/gallery">Gallery</a></h1>





    <div class="relative flex items-center px-3 py-2 lg:inline-flex bg-black bg-opacity-70 pt-2 mb-6 shadow-black shadow-md rounded-tl-3xl rounded-br-3xl text-violet-50">
        <form method="GET" action="#">
            <input type="text" name="search" placeholder="Find something..."
                class="bg-black bg-opacity-50 text-sm font-semibold placeholder-black focus:ring-transparent border-none !outline-none focus:border-none text-center placeholder:text-violet-50 shadow-black shadow-md rounded-tl-2xl rounded-br-2xl" value="{{ request('search') }}">
        </form>
    </div>
</header>
