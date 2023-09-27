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
        Schema::create('detail__hasiltes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hasil__tes_id')->constrained('hasil__tes')->onDelete('cascade');
            $table->foreignId('pernyataan_id')->constrained('pernyataans')->onDelete('cascade');
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
        Schema::dropIfExists('detail__hasiltes');
    }
};
