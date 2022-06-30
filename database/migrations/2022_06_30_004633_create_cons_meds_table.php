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
        Schema::create('cons_med', function (Blueprint $table) {
            $table->foreignId('med_codigo')->constrained('medico', 'med_codigo');
            $table->foreignId('cons_codigo')->constrained('consulta', 'cons_codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cons_med');
    }
};
