<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->integer('stock');
            $table->integer('price');
            $table->string('description');
            $table->unsignedBigInteger('id_brand');

            $table->timestamps();
            $table->foreign('id_brand')->references('id')->on('brand')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');

    }
};
