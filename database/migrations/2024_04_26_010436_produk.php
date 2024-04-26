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
        Schema::create('produk', function(Blueprint $table){
            $table->integer('produkid')->autoIncrement();
            $table->string('namaproduk');
            $table->decimal('harga',10,2);
            $table->integer('stok');
            $table->primary('produkid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produk');
    }
};
