<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_slag', 20);
            $table->unsignedBigInteger('gen_id');
            $table->string('post_title', 255);
            $table->string('post_author', 20);
            $table->text('post_content')->nullable();
            $table->string('post_stats', 10)->default('pending');
            $table->integer('watch_count');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            // $table->primary('post_id');

            $table->foreign('gen_id')->references('gen_id')->on('genre')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
