<x-layout>
    <x-nav></x-nav>
    <br>
    <x-header></x-header>
    <br>
    <div class="w3-margin-top w3-container w3-center">
        <h1>{{ $product->title }}</h1>
        <div>
            {!! $product->body !!}
        </div>
        <a href="/">Go Back</a>
    </div>
    <x-footer></x-footer>
</x-layout>
