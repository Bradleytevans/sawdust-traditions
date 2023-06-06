<div class="bg-opacity-0">
    <div class="mx-auto max-w-2xl py-4 px-4 lg:max-w-7xl lg:px-8  mb-16">
        <h3 class=" shadow-md shadow-black text-2xl text-center  bg-gray-200 bg-opacity-70 w-5/6 mx-auto  rounded-3xl mt-10 mb-20 p-6">
            Products</h3>
        <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-12">
            @foreach ($products as $product)
            <a href="/gallery/?category={{ $product->slug }}" class="">
                <div class=" hover:bg-opacity-70 hover:text-gray-200  hover:bg-gray-800  shadow-md shadow-black aspect-w-1 mx-auto aspect-h-1 w-5/6 overflow-hidden rounded-3xl bg-gray-200  bg-opacity-80">
                    <h3 class="mt-4 text-2xl hover:text-gray-200 text-gray-900 pb-3">{{ $product->name}}</h3>
                    <img src="{{ asset('images/' . $product->slug . '.png') }}" class="h-full w-full  object-center group-hover:opacity-75">
                </div>
            </a>
            @endforeach
        </div>
    </div>