<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['field', 'transfer', 'time']);
            $table->text('title');
            $table->boolean('isDeleted')->default(false);
            $table->boolean('isHarvested')->default(false);
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
        Schema::dropIfExists('tech_operations');
    }
}
