<x-layout>
    <x-nav></x-nav>
    <br>
    <x-header></x-header>
    <br>
    <div class="border-solid border-4 border-black">
        <h1>{{ $product->title }}</h1>
        <img src="{{ asset($product->img) }}"  class="h-full w-full  object-center group-hover:opacity-75">
        <div>
            {!! $product->body !!}
        </div>
        <a href="/">Go Back</a>
    </div>
    <x-footer></x-footer>
</x-layout>
