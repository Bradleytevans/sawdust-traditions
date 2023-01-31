@props(['products'])
<x-gallery-featured :product="$products[0]"></x-gallery-featured>
@if ($products->count() > 1)
    <div class="lg:grid lg:grid-cols-6 mx-auto gap-4">
        @foreach ($products->skip(1) as $product)
            <x-gallery-card :product="$product" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
            </x-gallery-card>
        @endforeach
    </div>
@endif
