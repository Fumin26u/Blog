<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatGenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_gen', function (Blueprint $table) {
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('gen_id');

            $table->primary(['cat_id', 'gen_id']);

            $table->foreign('cat_id')->references('cat_id')->on('category')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cat_gen');
    }
}
