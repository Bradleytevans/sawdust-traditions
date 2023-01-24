<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Product::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $furniture = Category::create([
            'name' => 'Furniture',
            'slug' => 'furniture'
        ]);

        $misc = Category::create([
            'name' => 'Misc',
            'slug' => 'misc'
        ]);

        $pet = Category::create([
            'name' => 'Pet',
            'slug' => 'pet'
        ]);

        Product::create([
            'user_id' => $user->id,
            'category_id' => $furniture->id,
            'title' => 'Lorem Ipsum',
            'slug' => 'lorem-ipsum',
            'excerpt' => 'Lorem Ipsum dolor',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus optio voluptatem minus. Fuga animi delectus dolorem debitis, sed officiis quia tempora vel accusantium laboriosam non voluptatum, nam excepturi exercitationem? Laboriosam!'
        ]);

        Product::create([
            'user_id' => $user->id,
            'category_id' => $misc->id,
            'title' => 'Lorem Ipsum',
            'slug' => 'lorem-ipsum',
            'excerpt' => 'Lorem Ipsum dolor',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus optio voluptatem minus. Fuga animi delectus dolorem debitis, sed officiis quia tempora vel accusantium laboriosam non voluptatum, nam excepturi exercitationem? Laboriosam!'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
