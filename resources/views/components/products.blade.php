<div class="bg-opacity-0">
    <div class="max-w-2xl p-2 mx-auto mb-16 lg:max-w-7xl lg:px-8">
        <h3 class="w-5/6 p-6 mx-auto mt-10 mb-12 text-2xl text-center bg-gray-200 shadow-md shadow-black bg-opacity-70 rounded-3xl">
            Products</h3>
        <div class="grid w-5/6 grid-cols-1 gap-4 mx-auto sm:grid-cols-2 xl:grid-cols-4 xl:gap-x-12">
            @foreach ($homeProducts as $product)
            <a href="/gallery/?category={{ $product->slug }}" class="">
                <div class="mx-auto overflow-hidden bg-gray-200 shadow-md hover:bg-opacity-70 hover:text-gray-200 hover:bg-gray-800 shadow-black rounded-3xl bg-opacity-80">
                    <h3 class="pb-3 mt-4 text-2xl text-gray-900 hover:text-gray-200">{{ $product->name}}</h3>
                    <img src="{{ asset('images/' . $product->slug . '.png') }}" class="object-center w-full h-full group-hover:opacity-75">
                </div>
            </a>
            @endforeach
        </div>
    </div>