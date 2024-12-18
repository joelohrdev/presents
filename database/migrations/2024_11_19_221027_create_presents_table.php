<?php

use App\Models\Kid;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('presents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kid::class)->constrained();
            $table->string('name');
            $table->string('store')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->string('link')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('purchased')->default(false);
            $table->string('image')->nullable();
            $table->boolean('parent')->default(false)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('presents');
    }
};
