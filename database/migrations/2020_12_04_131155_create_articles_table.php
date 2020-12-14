<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('article_category_id')->nullable();
            $table->string('slug', 128);
            $table->unique('slug');
            $table->string('video_url', 256)->nullable();
            $table->boolean('on_header')->default(false);
            $table->boolean('on_footer')->default(false);
            $table->boolean('active')->default(false);
            $table->text('name')->nullable();
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
