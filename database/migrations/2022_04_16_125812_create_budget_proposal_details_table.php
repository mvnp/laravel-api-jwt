<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetProposalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_proposal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('budget_proposal_detail_id')->constrained();
            $table->string('type');
            $table->string('size_of_type');
            $table->double('qty_of_type', 8, 2);
            $table->double('total_per_unity', 8, 2);
            $table->double('total_amount', 8, 2);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('budget_proposal_details');
    }
}
