<?php

use App\Models\MyModel;
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
        Schema::create('my_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        MyModel::create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_models');
    }
};
