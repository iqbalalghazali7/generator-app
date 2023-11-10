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
        Schema::create('d_outlet_location', function (Blueprint $table) {
            $table->increments('locid');
            $table->integer('ogrpid');
            $table->string('name',100);
            $table->longText('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_outlet_location');
    }
};
