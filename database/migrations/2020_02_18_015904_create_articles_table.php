<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_name');
            $table->string('a_slug');
            $table->text('a_description');
            $table->longText('a_content')->nullable(true);
            $table->tinyInteger('a_active')->default(0);
            $table->string('a_avatar')->nullable(true);
            $table->tinyInteger('a_hot')->default(0);
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
        Schema::dropIfExists('articles');
    }
}
