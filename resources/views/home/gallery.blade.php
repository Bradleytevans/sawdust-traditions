<x-layout>
    <x-nav></x-nav>
    <x-gallery-header></x-gallery-header>
    <main class="mx-auto w-5/6 space-y-6 lg:mt-14">
        @if ($products->count())
        <x-gallery-grid :products="$products"></x-gallery-grid>

        {{ $products->links() }}
        @else
        <p class="text-center">No products yet please check back.</p>
        @endif
    </main>
    <x-footer></x-footer>
</x-layout>