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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string ('title') ;
            $table->string ('short_description'); 
            $table->longtext('body');
            $table->integer ('view_count');
            $table->enum ('status', ['public', 'pending', 'archived'])->default('pending'); 
            $table->integer('nominal');
            $table->integer('goal');
            $table->datetime('end_date')->nullable();
            $table->text('note');
            $table->string('receiver');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
