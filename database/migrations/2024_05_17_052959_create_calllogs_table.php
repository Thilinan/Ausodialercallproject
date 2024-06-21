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
        Schema::create('calllogs', function (Blueprint $table) {
            $table->id(); // Moved this line to the top

            $table->String('SCO1')->nullable(); // Added nullable() if these columns can be null
            $table->String('SCO2')->nullable();
            $table->String('Contact_no')->nullable();
            $table->String('Land_no')->nullable();
            $table->String('Customer_name')->nullable();
            $table->String('Product_Description')->nullable();
            $table->String('language')->nullable();
            $table->String('Model_Description')->nullable();

            $table->unsignedInteger('Status'); // Auto-incremented Status

            $table->String('Status_1')->nullable();
            $table->String('Status_2')->nullable();
            $table->String('Description')->nullable();
            $table->String('Comment')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calllogs');
    }
};
