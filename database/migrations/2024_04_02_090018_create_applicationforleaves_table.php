<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicationforleaves', function (Blueprint $table) {
            $table->id();
            $table->string('Office');
            $table->string('Name');
            $table->string('DateOfFiling');
            $table->string('Position');
            $table->string('Salary');
            $table->string('TypeOfLeave');
            $table->string('Others')->nullable();
            $table->string('DetailsOfLeave')->nullable();
            $table->string('WithinThePhilippines')->nullable();
            $table->string('Abroad')->nullable();
            $table->string('InHospital')->nullable();
            $table->string('OutPatient')->nullable();
            $table->string('SpecialLeaveBenefitsForWomen')->nullable();
            $table->string('NumberOfWorkingDaysAppliedFor')->nullable();
            $table->string('InclusiveDates')->nullable();
            $table->string('Commutation')->nullable();
            $table->string('Recommendation')->nullable();
            $table->string('ForDisapprovalDueTo')->nullable();
            $table->string('DaysWithPay')->nullable();
            $table->string('DaysWithoutPay')->nullable();
            $table->string('OthersSpecify')->nullable();
            $table->string('DisapprovedDueTo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicationforleaves');
    }
};
