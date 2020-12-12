<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemaColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_schema', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')
                ->references('id')->on('colors')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('schema_id');
            $table->foreign('schema_id')
                ->references('id')->on('schemas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('color_schema');
    }
}
