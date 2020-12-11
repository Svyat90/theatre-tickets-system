<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rows', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('schema_id');
            $table->foreign('schema_id')
                ->references('id')->on('schemas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')
                ->references('id')->on('colors')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('index');

            $table->double('price');
            $table->boolean('on_loggia')->default(false);
            $table->boolean('on_balcony')->default(false);
            $table->boolean('on_left')->default(false);
            $table->boolean('on_right')->default(false);

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
        Schema::dropIfExists('rows');
    }
}
