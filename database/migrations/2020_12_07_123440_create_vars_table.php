<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('spectacle_tag');
        Schema::dropIfExists('tags');

        Schema::create('vars', function (Blueprint $table) {
            $table->id();
            $table->string('key_ru', 32)->unique();
            $table->string('key_ro', 32)->unique();
            $table->string('key_en', 32)->unique();
            $table->text('val_ru')->nullable();
            $table->text('val_ro')->nullable();
            $table->text('val_en')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vars');
    }
}
