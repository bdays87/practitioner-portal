<?php

use App\Models\Studentqualification;
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
        Schema::create('studentqualificationdocuments', function (Blueprint $table) {
            $table->id();
            $table->integer('studentqualification_id');
            $table->integer('document_id');
            $table->string("filepath");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentqualificationdocuments');
    }
};
