<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('Product_Name');
            $table->decimal('Price', 10, 2);
            $table->text('Description')->nullable();
            $table->string('image')->nullable();
            $table->integer('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->timestamps();
            $table->softDeletes(); // Tambahkan softDeletes untuk menggunakan soft delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }

};
