<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function ($table) {
            $table->mediumText('location');
            $table->mediumText('property_status');
            $table->mediumText('type');
            $table->string('image_cover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function ($table) {
            $table->dropColumn('location');
            $table->dropColumn('property_status');
            $table->dropColumn('type');
            $table->dropColumn('image_cover');
        });
    }
}
