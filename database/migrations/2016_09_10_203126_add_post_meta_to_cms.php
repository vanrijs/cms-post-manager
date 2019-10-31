<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostMetaToCms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_postmeta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id', false, true);
            $table->string('meta_key');
            $table->longText('meta_value')->nullable();
            $table->longText('custom')->nullable();
            $table->string('group')->nullable();
            $table->timestamps();

            $table->index(['post_id']);

            $table->foreign('post_id')->references('id')->on('cms_posts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cms_postmeta');
    }
}
