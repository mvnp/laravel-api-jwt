<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('partner_id')->constrained();
            $table->text("title");
            $table->text("description");
            $table->double('property_area', 8, 2);
            $table->double('total_area', 8, 2);
            $table->double('amount', 8, 2);
            $table->integer('floors');
            $table->string('type');
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->boolean('is_public')->default(false);
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('projects');
    }
}
