<x-layout>

    <x-nav></x-nav>
    <x-header></x-header>
    <x-whatwedo></x-whatwedo>
    <div class="bg-opacity-0">
        <div class="mx-auto max-w-2xl py-10 px-4 lg:max-w-7xl lg:px-8">
            <h3
                class=" shadow-md shadow-gray-500 text-4xl text-center  bg-gray-200 bg-opacity-80 w-1/2 mx-auto  rounded-tl-3xl rounded-br-3xl mt-10 mb-20 p-6">
                Products</h3>
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-12">
                @foreach ($products as $product)
                    <a href="/products/{{ $product->slug }}" class="">
                        <div
                            class="shadow-md shadow-gray-500 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-tr-3xl rounded-bl-3xl bg-gray-200  bg-opacity-80">
                            <h3 class="mt-4 text-2xl text-gray-900 pb-3">{{ $product->title }}</h3>
                            <img src="{{ asset($product->img) }}"
                                class="h-full w-full  object-center group-hover:opacity-75">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
</x-layout>
