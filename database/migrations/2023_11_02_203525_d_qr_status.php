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
        Schema::create('d_qr_status', function (Blueprint $table) {
            $table->increments('qrsid');
            $table->integer('qrid');
            $table->integer('qrstid');
            $table->integer('locid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_qr_status');
    }
};
