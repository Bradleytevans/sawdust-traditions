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

    public $img;

    public function __construct($title, $excerpt, $order, $body, $slug, $img)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->order = $order;
        $this->body = $body;
        $this->slug = $slug;
        $this->img = $img;
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
                $document->img
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
