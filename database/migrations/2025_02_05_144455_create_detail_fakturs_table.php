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
    Schema::create('detail_fakturs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('faktur_id')->constrained()->onDelete('cascade');

        $table->foreignId('product_id')->nullable();
        $table->string('nama_produk');
        $table->integer('qty')->default(1);
        $table->integer('harga')->default(0);
        $table->integer('subtotal')->default(0);

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_fakturs');
    }
};
