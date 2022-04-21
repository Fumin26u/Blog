<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id('cat_id');
            $table->string('cat_name', 20);

            // $table->primary('cat_id');
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->id('gen_id');
            $table->string('gen_name', 20);

            // $table->primary('gen_id');
        });

        Schema::create('tag', function (Blueprint $table) {
            $table->id('tag_id');
            $table->string('tag_name', 40);

            // $table->primary('tag_id');
        });

        Schema::create('cat_gen', function (Blueprint $table) {
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('gen_id');

            $table->primary(['cat_id', 'gen_id']);

            $table->foreign('cat_id')->references('cat_id')->on('category')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gen_id')->references('gen_id')->on('genre')->onUpdate('cascade')->onDelete('cascade');
        });

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

        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->primary(['post_id', 'tag_id']);

            $table->foreign('post_id')->references('post_id')->on('post')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tag_id')->references('tag_id')->on('tag')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_gen');
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('post');
        Schema::dropIfExists('tag');
        Schema::dropIfExists('genre');
        Schema::dropIfExists('category');
        Schema::dropIfExists('migrations');
        Schema::dropIfExists('personal_access_tokens');
    }
}
