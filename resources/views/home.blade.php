<x-layout>
  <x-nav></x-nav>
<br>
  <x-header></x-header>
    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
    </div>
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
    
    <x-about></x-about>

    <x-founders></x-founders>

    <x-contact></x-contact>

    <x-footer></x-footer>
</x-layout>
