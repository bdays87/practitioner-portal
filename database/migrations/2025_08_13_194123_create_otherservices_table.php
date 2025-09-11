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
        Schema::create('otherservices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('generalledger')->nullable();
            $table->string('generatecertificate')->default('N');
            $table->string('requireapproval')->default('N');
            $table->string('expiretype')->enum('NONE', 'YEARLY', 'ANNUAL', 'MONTHLY', 'QUARTERLY', 'WEEKLY', 'DAILY');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otherservices');
    }
};
