<?php

use App\Models\Predial;
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
        Schema::create('predials', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->string('hcl');
            $table->enum('covid', ['SI', 'NO'])->default('NO');
            $table->string('dry_weight');
            $table->string('access1');
            $table->string('access2');
            $table->enum('frequency', [Predial::LMV, Predial::MJS]);
            $table->string('hour_hd');
            $table->string('filter');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predials');
    }
};
