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
        Schema::create('vinculos', function (Blueprint $table) {
            $table->integer('nr_contrato', autoIncrement: True);
            $table->foreignId('pac_codigo_id')->constrained('paciente', 'pac_codigo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('plan_codigo_id')->constrained('plano_saude', 'plan_codigo')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('vinculos');
    }
};
