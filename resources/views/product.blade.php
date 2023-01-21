<article>
    <h1>
        {{ $product->title}}
    </h1>

    <div>
        {{ $product->excerpt }}
    </div>
    <div>
        <p>{!! $product->body !!}</p>
    </div>
</article>
