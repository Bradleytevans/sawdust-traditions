<div class="bg-opacity-0">
    <div class="mx-auto max-w-2xl py-10 px-4 lg:max-w-7xl lg:px-8  mb-16">
        <h3
            class=" shadow-md shadow-black text-4xl text-center  bg-gray-200 bg-opacity-70 w-1/2 mx-auto  rounded-tl-3xl rounded-br-3xl mt-10 mb-20 p-6">
            Products</h3>
        <div class=" grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-12">
            <a href="/gallery/category/{{ $category[0]->slug }}" class="">
                <div
                    class=" hover:bg-opacity-70 hover:text-gray-200  hover:bg-gray-800  shadow-md shadow-black aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-tr-3xl rounded-bl-3xl bg-gray-200  bg-opacity-80">
                    <h3 class="mt-4 text-2xl hover:text-gray-200 text-gray-900 pb-3">Furniture</h3>
                    <img src="{{ asset('images/furn2.png') }}"
                        class="h-full w-full  object-center group-hover:opacity-75">
                </div>
            </a>
            <a href="/gallery/category/{{ $category[1]->slug }}" class="">
                <div
                    class=" hover:bg-opacity-70 hover:text-gray-200  hover:bg-gray-800  shadow-md shadow-black aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-tr-3xl rounded-bl-3xl bg-gray-200  bg-opacity-80">
                    <h3 class="mt-4 text-2xl hover:text-gray-200 text-gray-900 pb-3">Kitchen Goods</h3>
                    <img src="{{ asset('images/cuttinb2.png') }}"
                        class="h-full w-full  object-center group-hover:opacity-75">
                </div>
            </a>

            <a href="/gallery/category/{{ $category[2]->slug }}" class="">
                <div
                    class=" hover:bg-opacity-70 hover:text-gray-200  hover:bg-gray-800  shadow-md shadow-black aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-tr-3xl rounded-bl-3xl bg-gray-200  bg-opacity-80">
                    <h3 class="mt-4 text-2xl hover:text-gray-200 text-gray-900 pb-3">Pet Products</h3>
                    <img src="{{ asset('images/pett.png') }}"
                        class="h-full w-full  object-center group-hover:opacity-75">
                </div>
            </a>
            <a href="/gallery/category/{{ $category[3]->slug }}" class="">
                <div
                    class=" hover:bg-opacity-70 hover:text-gray-200  hover:bg-gray-800  shadow-md shadow-black aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-tr-3xl rounded-bl-3xl bg-gray-200  bg-opacity-80">
                    <h3 class="mt-4 text-2xl hover:text-gray-200 text-gray-900 pb-3">Miscellaneous</h3>
                    <img src="{{ asset('images/misc2.png') }}"
                        class="h-full w-full  object-center group-hover:opacity-75">
                </div>
            </a>
        </div>
    </div>
