<?php

use App\Models\Patient;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('dni')->unique();
            $table->string('firstname');
            $table->string('othername')->nullable();
            $table->string('surname');
            $table->string('lastname');
            $table->string('hcl');
            $table->enum('covid', ['SI', 'NO'])->default('NO');
            $table->string('sex');
            $table->date('birthday');
            $table->date('start_dial');
            $table->string('access');
            $table->string('dry_weight');
            $table->enum('frecuency', [Patient::LMV, Patient::MJS]);
            $table->string('code')->unique();
            $table->string('scan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
