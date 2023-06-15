<div class="grid items-center justify-center p-4 px-4 bg-black shadow-md sm:justify-between bg-opacity-80 shadow-black sm:flex">
    <span class="px-2 py-1 mx-auto mb-4 text-lg font-bold tracking-tight text-gray-300 bg-black rounded shadow-md sm:mb-0 shadow-black bg-opacity-40 hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200 sm:mx-0">
        <img src="{{ asset('images/sawdust.png') }}" alt="" class="inline h-8 rounded-lg">
        <a href="/" class="inline align-middle">Sawdust Traditions</a>
    </span>
    <nav class="mx-auto sm:mx-0">
        <a href="/" class="p-2 mx-2 font-semibold text-gray-300 bg-black rounded shadow-lg shadow-black bg-opacity-40 hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200">
            Home
        </a>
        <a href="/gallery" class="p-2 mx-2 font-semibold text-gray-300 bg-black rounded shadow-lg shadow-black bg-opacity-40 hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200">
            Gallery
        </a>
        <a href="/contact" class="p-2 mx-2 font-semibold text-gray-300 bg-black rounded shadow-lg shadow-black bg-opacity-40 hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200">
            Contact
        </a>
        <!-- @if (Request::is('gallery'))
        <a href="/gallery/admin" class="px-2 py-1 mr-5 font-semibold text-gray-300 bg-black rounded shadow-lg shadow-black bg-opacity-40 hover:bg-opacity-70 hover:bg-gray-500 hover:text-gray-200">
            Admin
        </a>
        @endif -->
    </nav>
</div>