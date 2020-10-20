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
            $table->dateTimeTz('date_hour');
            $table->string('img')->nullable();
            $table->text('link');
            $table->string('tag');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                                ->references('id')
                                ->on('categories')  
                                ->onDelete('cascade');
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