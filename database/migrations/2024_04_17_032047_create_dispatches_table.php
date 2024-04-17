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
        Schema::create('dispatches', function (Blueprint $table) {
            $table->id();
            $table->string('DispatchNumber');
            $table->integer('TripTicketNumber');
            $table->string('Date');
            $table->string('Name');
            $table->string('Address');
            $table->string('ContactNumber');
            $table->string('Office');
            $table->string('DescriptionofDispatch')->nullable();
            $table->string('PlateNumber')->nullable();
            $table->string('Driver');
            $table->string('Passenger')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispatches');
    }
};
