<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->unique();
            $table->text('picture')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 4);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }

}

