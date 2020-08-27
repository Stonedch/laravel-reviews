<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration {

    public function up() {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id_foreign');
            $table->unsignedBigInteger('users_id_foreign')->nullable();
            $table->unsignedBigInteger('statuses_id_foreign');
            $table->tinyInteger('score');
            $table->string('name', 255)->nullable();
            $table->text('positive')->nullable();
            $table->text('negative')->nullable();
            $table->timestamps();

            $table->foreign('products_id_foreign')
                  ->references('id')->on('products')
                  ->onDelete('cascade');
            $table->foreign('users_id_foreign')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->foreign('statuses_id_foreign')
                  ->references('id')->on('statuses')
                  ->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('reviews');
    }
}

