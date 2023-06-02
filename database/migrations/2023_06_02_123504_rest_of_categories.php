<?php

use App\Models\Category;
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
        Category::create([
            'name' => 'kitchen_goods',
            'slug' => 'kitchen_goods'
        ]);
        Category::create([
            'name' => 'pet_products',
            'slug' => 'pet_products'
        ]);
        Category::create([
            'name' => 'misc',
            'slug' => 'misc'
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
