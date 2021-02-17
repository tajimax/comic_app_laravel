<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('novels')) {
            Schema::create('novels', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('author');
                $table->string('genre');
                $table->string('save_path');
                $table->string('save_filename');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novels');
    }
}
