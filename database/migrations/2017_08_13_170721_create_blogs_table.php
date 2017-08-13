<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->nullable();
            $table->integer('sub_sub_category_id')->nullable();
            $table->string('icon');
            $table->string('text');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
            ->onUpdate('cascade')->onDelete('cascade');


            $table->index('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
