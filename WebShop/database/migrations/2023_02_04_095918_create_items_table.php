<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->string('desc', 250);
            $table->float('price', 7,2);
            $table->string('img1', 100)->nullable();
            $table->string('img2', 100)->nullable();
            $table->string('img3', 100)->nullable();
            $table->integer('pcs')->nullable();
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
};
