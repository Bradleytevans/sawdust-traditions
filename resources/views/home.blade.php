<x-layout>

    <x-nav></x-nav>
    <x-header></x-header>
    <x-about></x-about>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h3 class="text-4xl text-center mb-4">Products</h3>
          <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product)
            <a href="/products/{{ $product->slug }}" class="group">
              <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden shadow-lg rounded-md bg-gray-200">
                <img src="{{ asset($product->img) }}"  class="h-full w-full  object-center group-hover:opacity-75">
              </div> 
              <h3 class="mt-4 text-sm text-gray-700">{{ $product->title }}</h3>
            </a>
        @endforeach
        </div>
      </div>

    <!-- Project Section -->
    {{-- <div class="border-solid border-4 border-black" id="projects">
        @foreach ($products as $product)
        <div class="w3-container w3-center">
            <h1>
                <a href="/products/{{ $product->slug }}">
                    {{ $product->title }}
                </a>
                <div>
                    {{ $product->excerpt }}
                </div>
            </h1>
        </div>
    @endforeach
    </div> --}}

    <x-contact></x-contact>

    <x-footer></x-footer>

</x-layout>
