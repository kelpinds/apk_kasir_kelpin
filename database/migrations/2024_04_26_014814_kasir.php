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
        Schema::create('kasir',function(Blueprint $table){
            $table->integer('kasirid')->autoIncrement();
            $table->string('nama',);
            $table->string('username');
            $table->string('password');
            $table->enum('akses',['admin','petugas']);
            $table->primary('kasirid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kasir');
    }
};
