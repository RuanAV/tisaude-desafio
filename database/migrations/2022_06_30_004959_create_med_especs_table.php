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
        Schema::create('med_espec', function (Blueprint $table) {
            $table->foreignId('med_codigo')->constrained('medico', 'med_codigo');
            $table->foreignId('espec_codigo')->constrained('especialidade', 'espec_codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('med_espec');
    }
};
