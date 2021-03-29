<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmaciones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apePat');
            $table->string('apeMat');
            $table->string('obispo');
            $table->string('fechaC');
            $table->string('namePat')->nullable();
            $table->string('nameMat')->nullable();
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('lugarN');
            $table->string('fechaN');
            $table->string('lugarB');
            $table->string('fechaB');
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
        Schema::dropIfExists('confirmaciones');
    }
}
