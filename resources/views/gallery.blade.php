    @foreach ($products as $product)
        <article>
            <h1>
                <a href="/gallery/{{ $product->slug }}">
                {{ $product->title}}
                </a>
            </h1>

            <div>
                {{ $product->excerpt }}
            </div>
        </article>
    @endforeach
