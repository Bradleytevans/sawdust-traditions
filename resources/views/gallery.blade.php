<p><a href="/gallery">Gallery</a></p>
@foreach ($products as $product)
    <article>
        <h1>
            <a href="/gallery/{{ $product->slug }}">
                {{ $product->title }}
            </a>
        </h1>
        <p>
            By <a href="/authors/{{ $product->author->username }}">{{ $product->author->name }}</a>
        </p>
        <p>
            <a href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a>
        </p>
        <div>
            {{ $product->excerpt }}
        </div>
    </article>
@endforeach
