<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTagsnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_tags_new', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('new_id');
            $table->foreign('new_id')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedBigInteger('tagsnew_id');
            $table->foreign('tagsnew_id')->references('id')->on('tags_news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_tagsnew');
    }
}
