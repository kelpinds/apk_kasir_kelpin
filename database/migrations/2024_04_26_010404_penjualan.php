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
        Schema::create('penjualan', function(Blueprint $table){
            $table->integer('penjualanid')->autoIncrement();
            $table->date('tanggalpenjualan');
            $table->decimal('totalharga',10,2);
            $table->integer('pelangganid');
            $table->primary('penjualanid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('penjualan');
    }
};
