    @foreach ($products as $product)
        <article>
            <h1>
                <a href="/gallery/{{ $product->slug }}">
                {{ $product->title}}
                </a>
            </h1>
            <p>
                <a href="">{{ $product->category->name }}</a>
            </p>
            <div>
                {{ $product->excerpt }}
            </div>
        </article>
    @endforeach
