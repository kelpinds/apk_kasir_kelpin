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
        Schema::create('detailpenjualan', function(Blueprint $table){
            $table->integer('detailid')->autoIncrement();
            $table->integer('penjualanid');
            $table->integer('produkid');
            $table->integer('jumlahproduk');
            $table->decimal('subtotal',10,2);
            $table->primary('detailid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('detailpenjualan');
    }
};
