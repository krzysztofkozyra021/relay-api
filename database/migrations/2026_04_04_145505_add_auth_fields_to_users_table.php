<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::table("users", function (Blueprint $table): void {
            $table->string("password")->nullable()->change();
            $table->string("provider")->nullable();
            $table->string("provider_id")->nullable();
            $table->text("two_factor_secret")->nullable();
            $table->text("two_factor_recovery_codes")->nullable();
            $table->timestamp("two_factor_confirmed_at")->nullable();
        });
    }

    public function down(): void
    {
        Schema::table("users", function (Blueprint $table): void {
            $table->string("password")->nullable(false)->change();
            $table->dropColumn([
                "provider",
                "provider_id",
                "two_factor_secret",
                "two_factor_recovery_codes",
                "two_factor_confirmed_at",
            ]);
        });
    }
};
