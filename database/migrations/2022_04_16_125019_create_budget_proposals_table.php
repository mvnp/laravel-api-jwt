<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_proposals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('budget_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('partner_id')->constrained();
            $table->boolean('accepted')->default(false);
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
        Schema::dropIfExists('budget_proposals');
    }
}
