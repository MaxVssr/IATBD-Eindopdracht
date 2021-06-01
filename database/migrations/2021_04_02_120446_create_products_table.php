<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name')->index();
            $table->string('owner_email')->nullable();
            $table->foreign('owner_email')->references('email')->on('users');
            $table->string('lender_email')->nullable();
            $table->foreign('lender_email')->references('email')->on('users');
            $table->string('category');
            $table->foreign('category')->references("category")->on("category_of_products");
            $table->text('description');
            $table->string('status')->default('Beschikbaar');
            $table->string('return_date')->nullable();
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
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign('products_owner_email_foreign');
            $table->dropForeign('products_lender_email_foreign');
            $table->dropForeign('products_category_foreign');
        });
        Schema::dropIfExists('products');
    }
}
