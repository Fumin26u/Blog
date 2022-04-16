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

            $table->primary('cat_id');
        });

        Schema::create('genre', function (Blueprint $table) {
            $table->id('gen_id');
            $table->string('gen_name', 20);

            $table->primary('gen_id');
        });

        Schema::create('tag', function (Blueprint $table) {
            $table->id('tag_id');
            $table->string('tag_name', 40);

            $table->primary('tag_id');
        });

        Schema::create('cat_gen', function (Blueprint $table) {
            $table->bigInteger('cat_id');
            $table->bigInteger('gen_id');

            $table->primary(['cat_id', 'gen_id']);
        });

        Schema::create('post', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_slag', 20);
            $table->bigInteger('gen_id');
            $table->string('post_title', 255);
            $table->string('post_author', 20);
            $table->text('post_content');
            $table->string('post_stats', 10);
            $table->integer('watch_count');
            $table->timestamps();
            $table->timestamp('deleted_at');

            $table->primary('post_id');
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigInteger('post_id');
            $table->bigInteger('tag_id');

            $table->primary(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
