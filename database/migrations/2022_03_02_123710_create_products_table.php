<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// 8;Jn<lQjJA(s
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('info')->nullable();
            $table->string('price');
            $table->decimal('vat');

            $table->string('image');
            $table->string('alt')->nullable();

            $table->integer('stock');
            $table->integer('quantity');

            $table->string('category');

            $table->boolean('onsale30');
            $table->boolean('onsale50');

            $table->boolean('showstatus');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
        });






        

        // Schema::create('product_has_categories', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('product_id');
        //     $table->foreign('product_id')->references('id')->on('products');
        //     $table->unsignedBigInteger('category_id');
        //     $table->foreign('category_id')->references('id')->on('product_categories');
        //     $table->timestamps();
        //     $table->softDeletes();

        // });


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
