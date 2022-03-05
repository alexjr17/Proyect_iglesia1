<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->string('detalle');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('proposito_id')->nullable();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            $table->foreign('proposito_id')
                    ->references('id')
                    ->on('propositos')
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
        Schema::dropIfExists('gastos');
    }
}
