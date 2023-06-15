<header class="mx-auto mb-10 text-center max-w">
    <h1 class="my-12 text-6xl text-violet-50"><a href="/gallery">Gallery</a></h1>

    <div class="space-y-2">
        <!--  Category -->
        <div class="relative w-3/5 mx-auto text-sm font-semibold text-center bg-black bg-opacity-50 shadow-md text-violet-50 shadow-black rounded-xl">
            <x-category-dropdown></x-category-dropdown>
        </div>


        <!-- Search -->
        <div class="items-center justify-center  text-violet-50 bg-black bg-opacity-50 text-sm font-semibold focus:ring-transparent border-none !outline-none text-center shadow-black shadow-md rounded-xl w-3/5 mx-auto relative">
            <form method="GET" action="/gallery/" class="">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="inline-block ml-16 justify-self-end"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #fafafa
                            }
                        </style>
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                    <input type="text" name="search" placeholder="Type to search..." class="justify-self-start underline bg-transparent text-md font-semibold placeholder-black focus:ring-transparent border-none !outline-none text-start placeholder:text-violet-50 " value="{{ request('search') }}">
                </div>
            </form>
        </div>

</header>