<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBautismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bautismos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apePat');
            $table->string('apeMat');
            $table->string('namePat')->nullable();
            $table->string('nameMat')->nullable();
            $table->string('lugar');
            $table->string('fechaN');
            $table->string('fechaB');
            $table->string('sacerdote');
            $table->string('padrino')->nullable();
            $table->string('madrina')->nullable();
            $table->string('rc');
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
        Schema::dropIfExists('bautismo');
    }
}
