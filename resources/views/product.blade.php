<article>
    <h1>
        {{ $product->title}}
            <a href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a>
    </h1>

    <div>
        {{ $product->excerpt }}
    </div>
    <div>
        <p>{!! $product->body !!}</p>
    </div>
</article>
