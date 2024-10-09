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
        Schema::create('content_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('type');  // for text or image type
            $table->text('content'); // the actual content (text or image URL)
            $table->unsignedBigInteger('blockable_id'); // Explicitly declare blockable_id
            $table->string('blockable_type', 191); // Limit blockable_type to 191 characters
            $table->timestamps();

            // Create index for polymorphic fields to avoid length issue
            $table->index(['blockable_type', 'blockable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_blocks');
    }
};
