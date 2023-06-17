<x-layout>
    <x-nav></x-nav>
    <x-gallery-header></x-gallery-header>
    <x-layout>

        <div>
            <a href="/gallery" class="relative flex items-center justify-center w-3/5 px-2 py-1 mx-auto text-lg font-semibold text-center bg-black bg-opacity-50 shadow-md lg:w-1/3 text-violet-50 shadow-black rounded-2xl">
                <i class="pr-2 fa-sharp fa-solid fa-arrow-left"></i>

                Back to Products
            </a>
        </div>


        <main class="w-11/12 pt-2 mx-auto my-10 space-y-6 text-gray-200 bg-black shadow-md lg:w-2/3 lg:my-20 bg-opacity-70 shadow-black rounded-3xl">
            <div class="px-5 py-6 mb-10 gap-x-4">
                <div class="block">
                    <img src="/images/{{ $product->slug }}.jpg" alt="Blog Post illustration" class="mx-auto bg-black bg-opacity-50 rounded-xl">
                </div>

                <div class="flex flex-col justify-start flex-1 grid-rows-6 align-middle gap-y-10">
                    <header>
                        <div class="mt-4">
                            <h1 class="text-3xl">
                                <a href="/gallery/{{ $product->slug }}">
                                    {{ ucwords($product->title) }}
                                </a>
                            </h1>
                        </div>

                        <div class="space-x-2">
                            <a href="/gallery/?category={{ $product->category->slug }}" class="px-3 py-1 text-xs font-semibold text-gray-300 uppercase border border-gray-300 rounded-full" style="font-size: 10px">{{ $product->category->name }}
                            </a>
                        </div>

                        <div>
                            <span class="block mt-2 text-sm text-gray-400">
                                Published <time>{{ $product->created_at->diffForHumans() }}</time>
                            </span>
                        </div>
                    </header>

                    <div class="text-md">
                        {!! $product->body !!}
                    </div>

                </div>
                <div class="flex justify-center mt-5">
                    <a href="/contact" class="px-1 py-3 bg-black rounded-lg shadow-md text-md bg-opacity-70 shadow-black">Get your custom piece now!</a>
                </div>
            </div>
        </main>

    </x-layout>
    <x-footer></x-footer>

</x-layout>