<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('meta_description');
            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->string('salary')->nullable();
            $table->string('type')->nullable()->comment('Full-time, Part-time, Contract, etc.');
            $table->string('duration')->nullable();
            $table->text('description');
            $table->string('application_email')->nullable();
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
