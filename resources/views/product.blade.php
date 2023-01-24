<article>
    <h1>
        {{ $product->title }}
    </h1>
    <p>
        By <a href="/authors/{{ $product->author->username }}">{{ $product->author->name}}</a>
    </p>
    <p>
        category: <a href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a>
    </p>
    <div>
       <p> body: {!! $product->body !!} lore</p>
    </div>
    <p><a href="/gallery">Gallery</a></p>
</article>
