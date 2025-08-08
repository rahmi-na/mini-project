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
        Schema::create('analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamp('created_on')->nullable();
            $table->unsignedBigInteger('last_updated_by')->nullable();
            $table->timestamp('last_updated_on')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('code')->unique();
            $table->string('description')->nullable();

            $table->unsignedBigInteger('parameter_id')->nullable();
            $table->unsignedBigInteger('method_id')->nullable();
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->integer('lead_time')->nullable();

            $table->foreign('parameter_id')->references('id')->on('parameters')->onDelete('set null');
            $table->foreign('method_id')->references('id')->on('methods')->onDelete('set null');
            $table->foreign('sample_id')->references('id')->on('samples')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analyses');
    }
};
