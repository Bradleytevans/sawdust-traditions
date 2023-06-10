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
            'slug' => 'dogcrate_tv',
            'title' => 'Customize Your Space',
            'excerpt' => 'Discover the perfect fusion of functionality and style with our customizable dog crate TV stand, showcasing the endless possibilities for tailoring your furniture to fit your unique needs.',
            'body' => 'Experience the perfect fusion of functionality and style with our customizable dog crate TV stand. This innovative piece showcases the endless possibilities for tailoring your furniture to fit your unique needs. Seamlessly integrating a cozy and secure space for your pet alongside ample storage for your entertainment needs, our dog crate TV stand offers the versatility to personalize dimensions, finishes, and features to match your home decor and lifestyle. Discover the joy of having furniture that caters to both your furry friend and your entertainment requirements, highlighting the limitless potential for customization.',
            'category_id' => '1'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'table',
            'title' => 'Gather and Feast',
            'excerpt' => 'Grand Dining: Large Table & Bench',
            'body' => 'Experience the perfect blend of elegance and functionality with our grand dining room table accompanied by a bench. Crafted with meticulous attention to detail, this spacious table becomes the centerpiece of your dining area, accommodating gatherings of all sizes. The accompanying bench adds versatility and charm, providing ample seating for extra guests and creating a warm and inviting atmosphere. Create lasting memories and enjoy shared meals around this exquisite dining set.',
            'category_id' => '1'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'exam_table',
            'title' => 'Efficiency and Convenience',
            'excerpt' => "The Versatile Veterinarian's Exam Table with Dual Access Drawers",
            'body' => "This veterinarian's exam table is designed with efficiency and convenience in mind. Featuring dual-access drawers, it allows for easy record management and quick access to essential supplies during examinations. Built with sturdy construction and a non-slip surface, it ensures the safety and comfort of furry patients. Experience enhanced efficiency and a seamless workflow with this thoughtfully designed exam table.",
            'category_id' => '3'
        ]);
        Product::create([
            'user_id' => '1',
            'slug' => 'island',
            'title' => 'Nature Meets Industrial',
            'excerpt' => " Live edge wood and sturdy iron legs combine rustic charm with contemporary style.",
            'body' => "Indulge in the captivating fusion of nature and industry with our extraordinary kitchen island. Handcrafted from live edge wood, each piece showcases the raw, organic beauty of the natural wood grain. Supported by sleek iron legs, this island becomes the centerpiece of your kitchen, offering both rustic charm and contemporary style. With a countertop and convenient storage options, it combines striking aesthetics with practical functionality, creating a gathering place where memories are made.",
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
