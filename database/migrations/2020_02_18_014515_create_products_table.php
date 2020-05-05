<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('pro_slug');
            $table->integer('pro_category_id');
            $table->integer('pro_price')->default(0);
            $table->tinyInteger('pro_sale')->nullable()->default(0);
            $table->tinyInteger('pro_active')->default(0);
            $table->tinyInteger('pro_hot')->default(0);
            $table->text('pro_description');
            $table->string('pro_avatar')->nullable(true);
            $table->longText('pro_content')->nullable(true);
            $table->tinyInteger('pro_number')->default(0);
            $table->integer('pro_total_rating')->default(0);
            $table->integer('pro_pay')->default(0);
            $table->integer('pro_total_number')->default(0);

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
