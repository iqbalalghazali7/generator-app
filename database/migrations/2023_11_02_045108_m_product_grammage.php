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
        Schema::create('m_product_grammage', function (Blueprint $table) {
            $table->increments('grammid');
            $table->integer('prodid');
            $table->integer('fl_id');
            $table->integer('packid');
            $table->integer('gram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_product_grammage');
    }
};
