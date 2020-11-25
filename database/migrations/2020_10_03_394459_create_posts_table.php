<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('subtitle');
            $table->text('content');
            $table->text('link');
            $table->integer('visity')->default('0');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')
                                ->references('id')
                                ->on('sections');
            $table->foreign('category_id')
                                ->references('id')
                                ->on('categories')
                                ->onDelete('cascade');
            $table->foreign('user_id')
                                ->references('id')
                                ->on('users');

            $table->softDeletes();
            $table->timestampsTz();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
