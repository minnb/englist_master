<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('c1')->nullable();
            $table->longText('c2')->nullable();
            $table->longText('c3')->nullable();
            $table->longText('c4')->nullable();
            $table->longText('c5')->nullable();
            $table->longText('c6')->nullable();
            $table->longText('c7')->nullable();
            $table->longText('c8')->nullable();
            $table->longText('c9')->nullable();
            $table->longText('c10')->nullable();
            $table->json('options')->nullable();
            $table->boolean('blocked');
            $table->string('image')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
