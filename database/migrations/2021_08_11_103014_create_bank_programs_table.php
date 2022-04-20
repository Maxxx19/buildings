<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_programs', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_amount');
            $table->integer('loan_term');
            $table->decimal('initial_contribution', $precision = 7, $scale = 3);
            $table->decimal('interest_rate', $precision = 7, $scale = 3);
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
        Schema::dropIfExists('bank_programs');
    }
}
