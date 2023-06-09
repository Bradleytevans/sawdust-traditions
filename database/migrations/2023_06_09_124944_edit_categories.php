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
        Category::where('name', 'kitchen_goods')->update(['name' => 'Kitchen Goods']);
        Category::where('name', 'pet-products')->update(['name' => 'Pet Products']);
        Category::where('name', 'misc')->update([
            'name' => 'miscellaneous',
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
