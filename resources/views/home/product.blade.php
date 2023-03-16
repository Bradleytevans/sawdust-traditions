<x-layout>
    <x-nav></x-nav>
    <x-gallery-header></x-gallery-header>
    <x-layout>

        <main class="mx-auto mt-10 max-w-7xl space-y-6 lg:mt-20">
            <div>
                <a href="/"
                    class="inline-flex items-center px-3 bg-black bg-opacity-50 text-lg font-semibold text-center text-violet-50 shadow-black shadow-md rounded-2xl relative  lg:inline-flex">
                    <i class="fa-sharp fa-solid fa-arrow-left pr-2"></i>

                     Back to Products
                </a>
            </div>
            <article
                class="mx-auto max-w-6xl gap-x-10 lg:grid lg:grid-cols-12 bg-black bg-opacity-70 text-gray-200 pt-2 shadow-black shadow-md rounded-tl-3xl rounded-br-3xl">

                <div class="col-start-2 col-end-8 mb-10 lg:pt-1r4 lg:text-center">
                    <img src="/images/drill.jpg" alt="" class="rounded-xl">

                    <p class="mt-4 block text-xs text-gray-400">
                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </p>
                </div>

                <div class="col-span-4">
                    <div class="mb-6 hidden justify-start lg:flex">


                    </div>

                    <h1 class="mb-10 text-3xl font-bold lg:text-4xl">
                        {{ ucwords($product->title) }}
                    </h1>

                    <div class="space-y-4 leading-loose lg:text-lg space-y-4">
                        <p>
                            {!! $product->body !!}
                        </p>
                    </div>
                </div>
            </article>
        </main>

    </x-layout>
    <x-footer></x-footer>

</x-layout>
