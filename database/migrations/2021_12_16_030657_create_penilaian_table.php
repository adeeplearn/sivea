<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asistensi_id')
                ->constrained('asistensi')
                ->cascadeOnDelete();
            $table->foreignId('asistensi_id')
                ->constrained('asistensi')
                ->cascadeOnDelete();
            $table->decimal('nilai_1');
            $table->decimal('nilai_2');
            $table->decimal('nilai_3');
            $table->decimal('nilai_4');
            $table->decimal('nilai_5');
            $table->decimal('nilai_6');
            $table->decimal('nilai_7');
            $table->text('pesan')->nullable();
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
        Schema::table('penilaian', function (Blueprint $table) {
            $table->dropForeign('asistensi_id');
            $table->dropColumn('asistensi_id');
        });
        Schema::dropIfExists('penilaian');
    }
}
