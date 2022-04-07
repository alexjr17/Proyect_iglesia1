<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBautizosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bautizos', function (Blueprint $table) {
            $table->id();
            
            $table->date('fecha')->nullable();        
            $table->unsignedBigInteger('bautizoable_id');
            $table->string('bautizoable_type');

            $table->primary(['bautizoable_id', 'bautizoable_type']);
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
        Schema::dropIfExists('bautizos');
    }
}
