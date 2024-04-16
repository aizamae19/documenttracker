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
        Schema::create('locators', function (Blueprint $table) {
            $table->id();
            $table->string('Year');
            $table->string('MonthOf');
            $table->string('NameOfEmployee');
            $table->string('Designation');
            $table->string('Office');
            $table->string('Date');
            $table->string('ExpectedTimeOfDeparture');
            $table->string('ExpectedTimeOfReturn');
            $table->string('TimeDeviation');
            $table->string('OfficialOrPersonal');
            $table->string('Purpose');
            $table->string('Approval');
            $table->string('RequestForTranspo');
            $table->string('OfficeEstablishmentVisited');
            $table->string('ConfirmationOfAppearance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locators');
    }
};
