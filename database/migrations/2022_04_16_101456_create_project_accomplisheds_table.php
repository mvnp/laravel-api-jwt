<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAccomplishedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_accomplisheds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('project_task_id')->constrained();
            $table->double('total_amount', 8, 2);
            $table->boolean('is_payed')->default(false);
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
        Schema::dropIfExists('project_accomplisheds');
    }
}
