<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->index(['id']);
        });

        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->index(['id']);
        });

        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->index(['id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('sub_categories');
        Schema::dropIfExists('sub_sub_categories');
    }
}
