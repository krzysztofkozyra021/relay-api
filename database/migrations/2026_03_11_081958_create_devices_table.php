<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create("devices", function (Blueprint $table): void {
            $table->id();
            $table->uuid("uuid")->unique();
            $table->string("name");
            $table->string("type");
            $table->string("model")->nullable();
            $table->string("brand")->nullable();
            $table->string("serial_number")->nullable();
            $table->string("location");
            $table->date("installation_date")->nullable();
            $table->text("notes")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("devices");
    }
};
