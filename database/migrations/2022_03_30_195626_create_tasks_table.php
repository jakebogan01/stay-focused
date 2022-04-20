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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('color_id');
            $table->foreignId('priority_id');
            $table->foreignId('status_id');
            $table->string('title');
            $table->text('description');
            $table->text('note');
            $table->time('allotted_time');
            $table->boolean('more_time');
            $table->softDeletes();
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
        Schema::dropIfExists('tasks');
    }
};
