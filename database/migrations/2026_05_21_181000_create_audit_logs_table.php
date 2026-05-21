<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("audit_logs", function (Blueprint $table): void {
            $table->id();
            $table->foreignId("user_id")->nullable()->constrained("users")->nullOnDelete();
            $table->string("action");
            $table->text("description");
            $table->string("model_type")->nullable();
            $table->string("model_id")->nullable();
            $table->json("payload")->nullable();
            $table->string("ip_address")->nullable();
            $table->text("user_agent")->nullable();
            $table->timestamp("created_at")->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("audit_logs");
    }
};
