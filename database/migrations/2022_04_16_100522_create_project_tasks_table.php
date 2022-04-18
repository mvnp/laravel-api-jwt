<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('project_id')->constrained();
            $table->foreignId('project_department_id')->constrained();
            $table->foreignId('project_department_service_id')->constrained();
            $table->string("description");
            $table->integer("percent");
            $table->double("total_amount");
            $table->boolean("status_partner_ended");
            $table->boolean("status_customer_ended");
            $table->dateTime("date_request_payment");
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
        Schema::dropIfExists('project_tasks');
    }
}
