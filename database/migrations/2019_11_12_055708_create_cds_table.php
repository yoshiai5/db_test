<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_cd_id')->nullable();
            $table->string('title');
            $table->timestamps();

            $table->foreign('parent_cd_id')
                ->references('id')
                ->on('cds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cds');
    }
}
