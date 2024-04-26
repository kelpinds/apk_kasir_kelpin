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
        Schema::create('pelanggan', function(Blueprint $table){
            $table->integer('pelangganid')->autoIncrement();
            $table->string('namapelanggan');
            $table->text('alamat');
            $table->string('nomortelpon',15);
            $table->primary('pelangganid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pelanggan');
    }
};
