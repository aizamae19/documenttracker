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
        Schema::create('applicationforleave', function (Blueprint $table) {
            $table->id();
            $table->string('Office');
            $table->string('Name');
            $table->string('DateOfFiling');
            $table->string('Position');
            $table->string('Salary');
            $table->string('TypeOfLeave');
            $table->string('Others');
            $table->string('DetailsOfLeave');
            $table->string('WithinThePhilippines');
            $table->string('Abroad');
            $table->string('InHospital');
            $table->string('OutPatient');
            $table->string('SpecialLeaveBenefitsForWomen');
            $table->string('NumberOfWorkingDaysAppliedFor');
            $table->string('InclusiveDates');
            $table->string('Commutation');
            $table->string('SignatureOfApplicant');
            $table->string('Recommendation');
            $table->string('ForDisapprovalDueTo');
            $table->string('AuthorizedOfficer');
            $table->string('DaysWithPay');
            $table->string('DaysWithoutPay');
            $table->string('OthersSpecify');
            $table->string('DisapprovedDueTo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicationforleave');
    }
};
