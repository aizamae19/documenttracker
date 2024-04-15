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
        Schema::create('certificateofappearances', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Designation');
            $table->string('Service');
            $table->string('InclusiveDate');
            $table->string('Location');
            $table->string('Day');
            $table->string('Date');
            $table->string('Place');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificateofappearances');
    }
};
