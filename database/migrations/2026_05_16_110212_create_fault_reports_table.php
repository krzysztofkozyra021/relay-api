<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("fault_reports", function (Blueprint $table): void {
            $table->id();
            $table->uuid("device_uuid");
            $table->foreign("device_uuid")->references("uuid")->on("devices")->cascadeOnDelete();
            $table->string("title");
            $table->text("description")->nullable();
            $table->string("reported_by")->nullable();
            $table->string("contact")->nullable();
            $table->enum("status", ["pending", "in_progress", "resolved"])->default("pending");
            $table->dateTime("resolved_at")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("fault_reports");
    }
};
