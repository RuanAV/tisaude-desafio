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
        Schema::create('cons_proc', function (Blueprint $table) {
            $table->foreignId('proc_codigo_id')->constrained('procedimento', 'proc_codigo');
            $table->foreignId('cons_codigo_id')->constrained('consulta', 'cons_codigo');
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
        Schema::dropIfExists('cons_proc');
    }
};
