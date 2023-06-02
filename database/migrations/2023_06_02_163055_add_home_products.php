<?php

use App\Models\HomeProducts;
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
        HomeProducts::create([
            'name' => 'Furniture',
            'slug' => 'furniture'
        ]);
        HomeProducts::create([
            'name' => 'Kitchen Goods',
            'slug' => 'kitchen_goods'
        ]);
        HomeProducts::create([
            'name' => 'Pet Products',
            'slug' => 'pet_products'
        ]);
        HomeProducts::create([
            'name' => 'Miscellaneous',
            'slug' => 'miscellaneous'
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
