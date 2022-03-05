<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('slug');
            $table->string('correo');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('bautizo');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
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
        Schema::dropIfExists('miembros');
    }
}
