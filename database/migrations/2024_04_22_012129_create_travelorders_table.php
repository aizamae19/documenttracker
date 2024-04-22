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
        Schema::create('travelorders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('office_id')->nullable();
            $table->string('Date');
            $table->string('Subject');
            $table->string('Location');
            $table->string('InclusiveDates');
            $table->string('Name');
            $table->string('Designation');
            $table->string('Office');
            $table->string('Endorser');
            $table->string('Dated');
            $table->string('Purpose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travelorders');
    }
};

    