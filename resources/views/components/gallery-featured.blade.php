@props(['product'])

<article {{ $attributes->merge(['class' => "bg-black bg-opacity-70 text-gray-200 pt-2 shadow-black shadow-md rounded-3xl hidden lg:block"]) }}>
    <div class="flex px-5 py-6">
        <div class="flex-1">
            <img src="/images/{{ $product->slug }}.jpg" alt="Blog Post illustration" class="mx-auto bg-black bg-opacity-50 rounded-xl">
        </div>

        <div class="flex flex-col justify-between flex-1 mt-8">
            <header>
                <div class="space-x-2">
                    <a href="/gallery/?category={{ $product->category->slug }}" class="px-3 py-1 text-xs font-semibold text-blue-300 uppercase border border-blue-300 rounded-full" style="font-size: 10px">{{ $product->category->name }}
                    </a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/gallery/{{ $product->slug }}">
                            {{ ucwords($product->title) }}
                        </a>
                    </h1>

                    <span class="block mt-2 text-xs text-gray-400">
                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-4 space-y-4 text-sm">
                {!! $product->excerpt !!}
            </div>

            <footer class="items-center justify-between mt-8">
                <div>
                    <a href="/gallery/{{ $product->slug }}" class="px-2 py-1 font-semibold text-gray-800 bg-white border border-gray-400 rounded shadow-md shadow-black bg-opacity-70 hover:bg-opacity-70 hover:bg-gray-800 hover:text-gray-200">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>

<article {{ $attributes->merge(['class' => 'bg-black bg-opacity-70 text-gray-200 pt-2 mb-6 shadow-black shadow-md rounded-2xl lg:hidden']) }}>
    <div class="px-5 py-6">
        <div class="">
            <img src="/images/{{ $product->slug }}.jpg" alt="Blog Post illustration" class="mx-auto bg-black bg-opacity-50 rounded-xl">
        </div>

        <div class="flex flex-col justify-end mt-8">
            <header>
                <div class="space-x-2">
                    <a href="/gallery/?category={{ $product->category->slug }}" class="px-3 py-1 text-xs font-semibold text-gray-300 uppercase border border-gray-300 rounded-full" style="font-size: 10px">{{ $product->category->name }}
                    </a>
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/gallery/{{ $product->slug }}">
                            {{ ucwords($product->title) }}
                        </a>
                    </h1>

                    <span class="block mt-2 text-xs text-gray-400">
                        Published <time>{{ $product->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="mt-4 space-y-4 text-sm">
                {!! $product->excerpt !!}
            </div>

            <footer class="items-center justify-between mt-8">
                <div>
                    <a href="/gallery/{{ $product->slug }}" class="px-2 py-1 font-semibold text-gray-800 bg-white border border-gray-400 rounded shadow-md shadow-black bg-opacity-70 hover:bg-opacity-70 hover:bg-gray-800 hover:text-gray-200">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>