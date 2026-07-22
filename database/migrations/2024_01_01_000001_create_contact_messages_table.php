<?php

/*
|--------------------------------------------------------------------------
| Create Contact Messages Table Migration
|--------------------------------------------------------------------------
| Creates the database table for storing contact form submissions.
| This table captures visitor inquiries sent through the portfolio
| contact form. Includes timestamps for record tracking.
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creates the contact_messages table with fields
     * matching the ContactMessage model's fillable attributes.
     */
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Drops the contact_messages table if it exists.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
