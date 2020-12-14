<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInSpectaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spectacles', function (Blueprint $table) {
            $table->string('video_youtube_url', 256)->nullable();
            $table->string('video_title', 256)->nullable();
            $table->string('video_desc', 256)->nullable();
            $table->string('video_link', 256)->nullable();
            $table->timestamp('video_date')->nullable();
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
            $table->dropColumn('video_youtube_url', 'video_title', 'video_desc', 'video_link', 'video_date');
        });
    }
}
