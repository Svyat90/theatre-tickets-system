<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('phone', 128);
            $table->string('email', 128);
            $table->double('total');
            $table->text('short_desc')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('order_spectacle', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('spectacle_id');
            $table->foreign('spectacle_id')
                ->references('id')->on('spectacles')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_spectacle');
        Schema::dropIfExists('orders');
    }
}
