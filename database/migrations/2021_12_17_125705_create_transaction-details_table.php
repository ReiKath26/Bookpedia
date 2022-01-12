<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction-details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('book_id');
            $table->foreign('transaction_id')->references('id')->on('transaction-heads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
            $table->bigInteger('subtotal');
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
        Schema::dropIfExists('transaction-details');
    }
}
