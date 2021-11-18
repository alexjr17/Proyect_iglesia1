<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiezmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diezmos', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('miembro_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('miembro_id')->references('id')->on('miembros')->onDelete('set null');
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
        Schema::dropIfExists('diezmos');
    }
}
