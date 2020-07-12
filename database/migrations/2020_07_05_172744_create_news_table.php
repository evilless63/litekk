<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->string('header');
            $table->text('description');
            $table->text('text');
            $table->integer('views');
            $table->string('image');
            $table->string('meta_keys');
            $table->text('meta_description');
            $table->string('meta_title');
            $table->bigInteger('categoriesnew_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
