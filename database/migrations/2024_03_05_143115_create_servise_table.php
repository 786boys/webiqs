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
        Schema::create('servise', function (Blueprint $table) {
            $table->id();
            $table->string('servises');
            $table->string('title_fst');
            $table->longText('description_fst');
            $table->string('title_sec');
            $table->longText('description_sec');
            $table->timestamps();
        });
    }

    // {{-- title 
    //     description 
    //     2nd title
    //     2nd description 
    //     faqs --}}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servise');
    }
};
