<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchemaIdFieldInSpectaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spectacles', function (Blueprint $table) {
            $table->unsignedBigInteger('schema_id')->after('id');
            $table->foreign('schema_id')
                ->references('id')->on('schemas')
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
        Schema::table('spectacles', function (Blueprint $table) {
            $table->dropColumn('schema_id');
        });
    }
}
