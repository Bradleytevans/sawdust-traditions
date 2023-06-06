<div class="lg:flex items-center justify-center flex-wrap bg-black bg-opacity-80 p-4 px-4 shadow-black shadow-md grid">
    <span class="font-bold text-lg tracking-tight shadow-md shadow-black bg-opacity-40 bg-black hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 text-gray-300 px-2 py-1 rounded w-4/5 mx-auto mb-4">
        <img src="{{ asset('images/sawdust.png') }}" alt="" class="rounded-lg h-8 inline">
        <a href="/" class="inline align-middle">Sawdust Traditions</a>
    </span>
    <nav class="mx-auto">
        <a href="/" class="shadow-lg shadow-black bg-opacity-40 bg-black hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 text-gray-300 font-semibold p-2 rounded mx-2">
            Home
        </a>
        <a href="/gallery" class="shadow-lg shadow-black bg-opacity-40 bg-black hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 text-gray-300 font-semibold p-2 rounded mx-2">
            Gallery
        </a>
        <a href="/contact" class="shadow-lg shadow-black bg-opacity-40 bg-black hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 text-gray-300 font-semibold p-2 rounded mx-2">
            Contact
        </a>
        <!-- @if (Request::is('gallery'))
        <a href="/gallery/admin" class="shadow-lg shadow-black bg-opacity-40 bg-black hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 text-gray-300 font-semibold px-2 py-1 rounded mr-5">
            Admin
        </a>
        @endif -->
    </nav>
</div>