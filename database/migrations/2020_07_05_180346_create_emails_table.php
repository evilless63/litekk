<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('filepath')->nullable();
            $table->string('name')->nullable();
            $table->string('message')->nullable();
            $table->string('direction');
            /*
        Направления:
        1) - Директору
        2) - Заказать звонок
        3) - Полностью форма заявки
         */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
