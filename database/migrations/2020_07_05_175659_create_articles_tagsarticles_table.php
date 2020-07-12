<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTagsarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tagsarticle', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');  
            $table->integer('tagsarticle_id');
            $table->foreign('tagsarticle_id')->references('id')->on('tagsarticles')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_tagsarticle');
    }
}
