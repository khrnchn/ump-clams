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
        Schema::create('samples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('request_id');
            $table->string('sample_no');
            $table->string('sample_marking');
            $table->text('sample_description');
            $table->integer('no_of_samples');
            $table->enum('sample_condition');
            $table->string('action');
            $table->text('remarks');
            $table->string('delete_later');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
