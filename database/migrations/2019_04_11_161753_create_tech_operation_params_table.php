<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechOperationParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_operation_params', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tech_operation_type_id')->unsigned()->index();
            $table->string('title');
            $table->string('slug');
            $table->string('unit');

            $table->foreign('tech_operation_type_id')
                  ->references('id')
                  ->on('tech_operation_types')
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
        Schema::dropIfExists('tech_operation_params');
    }
}
