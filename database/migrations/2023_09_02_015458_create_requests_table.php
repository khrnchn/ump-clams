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
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->string('uct_no');
            $table->string('sample_lab_no');
            $table->double('total_price');
            $table->foreignId('formable_id');
            $table->string('formable_type');
            $table->enum('application_status');
            $table->foreignId('staff_id');
            $table->timestamp('approved_at');
            $table->foreignId('sample_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
