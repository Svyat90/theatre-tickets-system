<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cols', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('row_id');
            $table->foreign('row_id')
                ->references('id')->on('rows')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('index');

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
        Schema::dropIfExists('cols');
    }
}
