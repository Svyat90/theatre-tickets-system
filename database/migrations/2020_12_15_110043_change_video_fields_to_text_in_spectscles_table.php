<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeVideoFieldsToTextInSpectsclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spectacles', function (Blueprint $table) {
            $table->text('video_youtube_url')->change()->nullable();
            $table->text('video_title')->change()->nullable();
            $table->text('video_desc')->change()->nullable();
            $table->text('video_link')->change()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
