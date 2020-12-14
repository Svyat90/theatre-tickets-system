<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('spectacle_id');
            $table->foreign('spectacle_id')
                ->references('id')->on('spectacles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('row_id');
            $table->foreign('row_id')
                ->references('id')->on('rows')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('col_id');
            $table->foreign('col_id')
                ->references('id')->on('cols')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['spectacle_id', 'row_id', 'col_id']);

            $table->integer('place');
            $table->integer('row');
            $table->double('price');
            $table->enum('status', ['reserved', 'paid', 'open'])->default('open');
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
        Schema::dropIfExists('tickets');
    }
}
