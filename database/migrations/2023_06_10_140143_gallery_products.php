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
        Product::create([
            'user_id' => '1',
            'slug' => 'coffee_table',
            'title' => 'Elegant Concealment',
            'excerpt' => 'The Hidden Beauty of our Handcrafted Live Edge Coffee Table',
            'body' => 'Discover the perfect blend of elegance and security with our concealed gun safe coffee table. Meticulously handcrafted, this stunning piece of furniture seamlessly integrates a hidden compartment to discreetly store firearms and valuables. Its elegant design and sturdy construction provide quick access to your firearms when needed, ensuring both style and safety in your living space.',
            'category_id' => '1'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'liquor_cabinet',
            'title' => 'Elevate Your Spirits',
            'excerpt' => 'Discover stylish and functional liquor cabinets, meticulously crafted to showcase and protect your cherished spirits collection',
            'body' => 'Experience the epitome of style and functionality with our meticulously-crafted liquor cabinets. Carefully designed to showcase and protect your cherished spirits collection, these cabinets exude elegance while providing a secure and organized storage solution. With exquisite craftsmanship and attention to detail, our liquor cabinets make a striking addition to any room, elevating your spirits to a whole new level.',
            'category_id' => '1'
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
