<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Product::where('slug', 'island')->update(['category_id' => '1']);
        Product::create([
            'user_id' => '1',
            'slug' => 'hallway_bench',
            'title' => 'Streamlined Storage',
            'excerpt' => "The Functional Hallway Bench with Storage",
            'body' => "Enhance your entryway with our stylish and functional hallway bench. Expertly crafted, this versatile bench features a spacious storage compartment on top, providing a unique solution for keeping your entryway organized. The bench offers a comfortable seating surface, while the top compartment allows you to store items such as shoes, accessories, and other essentials. Enjoy a clutter-free entryway with our unique and functional hallway bench.",
            'category_id' => '1'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'cutting_board',
            'title' => 'Artistry in the Kitchen',
            'excerpt' => "Exquisite Custom Cutting Boards Tailored to Your Taste",
            'body' => "Introducing our collection of custom cutting boards, where artistry meets practicality. We understand that every kitchen is unique, and your cutting board should be too. That's why we offer a range of customizable options to create a cutting board that perfectly fits your style and needs. Functionality is at the core of our custom cutting boards. The smooth, flat surface provides an ideal cutting surface, while the sturdy construction ensures stability and prevents slipping during food preparation. With their generous size and durable build, our cutting boards are perfect for chopping, slicing, and dicing a wide range of ingredients.",
            'category_id' => '2'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'dogbowl',
            'title' => 'Pet Comfort',
            'excerpt' => "Stylish Elevated Pet Feed and Water Stand for Your Beloved Companion",
            'body' => "Make mealtime a delightful experience for your beloved canine companion with our stylish and functional elevated dog feed and water stand. Designed with their comfort in mind, this elevated stand offers a convenient and ergonomic solution for their dining needs.
            The elevated design of the stand brings the food and water bowls to a comfortable height for your dog, promoting better posture and aiding in digestion. No more straining their neck or crouching down to eat. This elevated stand provides a more relaxed and enjoyable mealtime experience.",
            'category_id' => '3'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
