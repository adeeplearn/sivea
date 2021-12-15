<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asisten_id')
                ->constrained('asisten')
                ->cascadeOnDelete();
            $table->foreignId('mengajar_id')
                ->constrained('mengajar')
                ->cascadeOnDelete();
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
        chema::table('asistensi', function (Blueprint $table) {
            $table->dropForeign('asisten_id');
            $table->dropColumn('asisten_id');
        });
        Schema::dropIfExists('asistensi');
    }
}
