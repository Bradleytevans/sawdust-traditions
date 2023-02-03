<x-layout>
    <x-nav></x-nav>
    <x-gallery-header :categories="$categories"></x-gallery-header>
    <main
        class=" mx-auto mt-6 max-w-6xl space-y-6 lg:mt-12">
        @if ($products->count())
            <x-gallery-grid :products="$products"></x-gallery-grid>
        @else
            <p class="text-center">No products yet please check back.</p>
        @endif
    </main>
    <x-footer></x-footer>
</x-layout>
