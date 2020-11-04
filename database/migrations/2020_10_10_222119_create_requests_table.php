<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('book_name');
            $table->string('book_author');
            $table->string('book_image');
            $table->string('issued_date')->nullable();
            $table->string('sub_date')->nullable();
            $table->string('date_returned')->nullable();
            $table->string('reason')->nullable();
            $table->string('status')->default('off');
            $table->timestamps();

           $table->foreign('user_id')
                 ->on('users')
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
        Schema::dropIfExists('requests');
    }
}
