<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->unsignedBigInteger('cat_id');
            $table->string('pub_date');
            $table->string('price');
            $table->string('quantity');
            $table->string('lease_week');
            $table->string('pages');
            $table->string('images');
            $table->string('imagesId')->nullable();
            $table->longText('synopsis');
            $table->timestamps();

            $table->foreign('cat_id')
                ->on('categories')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
