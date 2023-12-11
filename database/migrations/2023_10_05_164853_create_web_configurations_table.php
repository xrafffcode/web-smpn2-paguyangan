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
        Schema::create('web_configurations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->longText('description');
            $table->string('email');
            $table->string('phone');
            $table->string('logo')->nullable();
            $table->longText('map');
            $table->longText('address');
            $table->string('theme_color')->default('#000000');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('headmaster_name');
            $table->string('headmaster_image')->nullable();
            $table->longText('headmaster_message');
            $table->longText('vision');
            $table->longText('mission');
            $table->string('organization_structure')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_configurations');
    }
};
