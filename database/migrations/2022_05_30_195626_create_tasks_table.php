<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('color_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('priority_id')
                ->constrained()
                ->onDelete('cascade');
//            $table->foreignId('status_id');
            $table->string('title');
            $table->text('description');
            $table->text('note');
            $table->integer('allotted_time');
            $table->boolean('more_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
