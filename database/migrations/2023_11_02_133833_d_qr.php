<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_qr', function (Blueprint $table) {
            $table->increments('qrid');
            $table->integer('batchid');
            $table->integer('total');
            $table->string('ua');
            $table->date('date');
            $table->string('ip');
            $table->string('kode_unik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_qr');
    }
};
