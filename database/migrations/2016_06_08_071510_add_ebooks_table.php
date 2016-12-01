<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('ruta')->nullable();
            $table->text('descripcion')->nullable();
            $table->integer('estado')->unsigned()->default('0');
            $table->integer('users_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->enum('tipo',['original','copia'])->default('original');
            $table->integer('original_id')->nullable();
            
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::drop('ebooks');
    }
}
