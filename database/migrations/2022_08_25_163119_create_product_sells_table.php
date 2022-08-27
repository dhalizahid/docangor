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
        Schema::create('product_sells', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ProductAddID');
            $table->string('Quantity');
            $table->string('Warranty');
            $table->string('CustomerName')->nullable();
            $table->string('PhoneNo')->nullable();
            $table->foreignId('CategoryID');
            $table->string('Catagory');
            // $table->foreign('Category')->references('Catagory')->on('product_adds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sells');
    }
};
