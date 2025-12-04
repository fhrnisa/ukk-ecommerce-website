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
        Schema::create('order_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('service_type'); // print / ketik
            $table->string('file_path');
            $table->string('paper_type')->nullable();
            $table->string('color_type')->nullable();
            $table->integer('copies')->default(1);
            $table->text('notes')->nullable();
            $table->integer('price')->nullable(); // diisi admin
            $table->enum('status',['submitted','priced','processing','done'])
                ->default('submitted');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_services');
    }
};
