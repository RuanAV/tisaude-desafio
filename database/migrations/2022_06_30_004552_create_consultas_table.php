<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->id('cons_codigo');
            $table->date('data');
            $table->time('hora');
            $table->string('particular');
            $table->foreignId('pac_codigo_id')->constrained('paciente', 'pac_codigo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('med_codigo_id')->constrained('medico', 'med_codigo')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('consulta');
    }
};
