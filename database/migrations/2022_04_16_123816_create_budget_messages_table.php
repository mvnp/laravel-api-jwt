<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('budget_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('partner_id')->constrained();
            $table->text('subject');
            $table->text('description');
            $table->string('direction');
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
        Schema::dropIfExists('budget_messages');
    }
}
