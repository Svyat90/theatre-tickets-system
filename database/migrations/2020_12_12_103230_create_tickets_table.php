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

            $table->unsignedBigInteger('row_id')->after('id');
            $table->foreign('row_id')
                ->references('id')->on('rows')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('col_id')->after('id');
            $table->foreign('col_id')
                ->references('id')->on('cols')
                ->onUpdate('cascade')->onDelete('cascade');

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
