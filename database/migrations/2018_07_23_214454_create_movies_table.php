<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 100)->unique();
            $table->string('slug', 100  )->unique();
            $table->text('description');
            $table->string('author');
            $table->string('actors');
            $table->string('country')->nullable();
            $table->year('premiere')->nullable();
            $table->string('poster');
            $table->decimal('rating', 2, 1)->nullable();
            $table->enum('category', ['MOVIE', 'SERIE'])->default('MOVIE');

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
        Schema::dropIfExists('movies');
    }
}
