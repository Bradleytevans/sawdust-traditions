<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Products
{
    public $title;

    public $excerpt;

    public $order;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $order, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->order = $order;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        // return cache()->rememberForever('goods.all', function () {
        return collect(File::files(resource_path("products")))
            ->map(fn ($file) => YamlFrontMatter::parseFile($file))
            ->map(fn ($document) => new Products(
                $document->title,
                $document->excerpt,
                $document->order,
                $document->body(),
                $document->slug,
            ))
            ->sortBy('order');
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
        $product = static::find($slug);

        if (! $product) {
            throw new ModelNotFoundException();
        }

        return $product;
    }
}
