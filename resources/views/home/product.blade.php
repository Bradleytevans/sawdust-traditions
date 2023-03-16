<x-layout>
    <x-nav></x-nav>
    <x-gallery-header></x-gallery-header>
    <x-layout>

        <div>
            <a href="/"
                class="inline-flex items-center px-3 bg-black bg-opacity-50 text-lg font-semibold text-center text-violet-50 shadow-black shadow-md rounded-2xl relative  lg:inline-flex">
                <i class="fa-sharp fa-solid fa-arrow-left pr-2"></i>

                Back to Products
            </a>
        </div>


        <main
            class="mx-auto my-10 max-w-7xl space-y-6 lg:my-20 bg-black bg-opacity-70 text-gray-200 pt-2 shadow-black shadow-md rounded-tl-3xl rounded-br-3xl">
            <div class="py-6 px-5 flex gap-x-4">
                <div class="flex-1">
                    <img src="/images/drill.jpg" alt="Blog Post illustration" class="rounded-xl mx-auto">
                </div>

                <div class="flex-1 flex flex-col grid-rows-6 justify-start align-middle gap-y-10">
                    <header>
                        <div class="mt-4">
                            <h1 class="text-3xl">
                                <a href="/gallery/{{ $product->slug }}">
                                    {{ ucwords($product->title) }}
                                </a>
                            </h1>
                        </div>

                        <div class="space-x-2">
                            <a href="/gallery/?category={{ $product->category->slug }}"
                                class="rounded-full border border-blue-300 px-3 py-1 text-xs font-semibold uppercase text-blue-300"
                                style="font-size: 10px">{{ $product->category->name }}
                            </a>
                        </div>

                        <div>
                            <span class="mt-2 block text-sm text-gray-400">
                                Published <time>{{ $product->created_at->diffForHumans() }}</time>
                            </span>
                        </div>
                    </header>

                    <div class="my-4 text-lg mx-6">
                        {!! $product->body !!}
                    </div>

                    <div class="mt-10">
                        <a href="/" class="bg-black p-3 bg-opacity-70 rounded-lg shadow-md shadow-black">Get your custom piece now!</a>
                    </div>
                </div>
            </div>
        </main>

    </x-layout>
    <x-footer></x-footer>

</x-layout>
