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
            $table->integer('type_id')->unsigned()->index();
            $table->text('title');
            $table->boolean('isDeleted')->default(false);
            $table->boolean('isHarvested')->default(false);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('tech_operation_types')->onDelete('cascade');
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
