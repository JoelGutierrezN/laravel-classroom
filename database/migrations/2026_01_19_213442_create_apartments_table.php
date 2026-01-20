<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->cascadeOnDelete();
        });
    }

    public function down(): void {
        Schema::dropIfExists('apartments');
    }
};
