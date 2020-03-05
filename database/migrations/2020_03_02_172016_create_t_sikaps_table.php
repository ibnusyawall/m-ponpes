<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSikapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sikap', function (Blueprint $table) {
            $table->string('s_nama');
            $table->enum('status', ['sangat_baik', 'baik', 'kurang_baik']);
            $table->text('catatan');

            //$table->forign('s_nama')->references('id')->on('t_siswa')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_sikap');
    }
}
