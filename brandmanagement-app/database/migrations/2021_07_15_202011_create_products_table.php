<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *W
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('collection');
            $table->string('product_name');
            $table->integer('designed_by');
            $table->date('design_date');
            $table->integer('fabric_type');
            $table->string('fabric');
            $table->string('fabric_length');
            $table->string('main_color');
            $table->string('secondary_color')->nullable();
            $table->string('product_sample_image');
            $table->string('clothing_label_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
