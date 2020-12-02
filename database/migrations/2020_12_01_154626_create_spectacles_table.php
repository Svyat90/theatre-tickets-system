<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpectaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spectacles', function (Blueprint $table) {
            $table->id();
            $table->json('name')->nullable();
            $table->json('author')->nullable();
            $table->json('producer')->nullable();
            $table->json('description')->nullable();
            $table->json('prices')->nullable();
            $table->boolean('active')->default(false);
            $table->string('slug', 128)->unique();
            $table->integer('min_age');
            $table->unsignedInteger('duration');
            $table->timestamp('start_at');
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
        Schema::dropIfExists('spectacles');
    }
}
