<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoinPenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poin_penilaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kriteria_id')
                ->constrained('kriteria')
                ->cascadeOnDelete();
            $table->text('deskripsi');
            $table->text('pertanyaan');
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
        Schema::table('kriteria', function (Blueprint $table) {
            $table->dropForeign('kriteria_id');
            $table->dropColumn('kriteria_id');
        });
        Schema::dropIfExists('poin_penilaian');
    }
}
