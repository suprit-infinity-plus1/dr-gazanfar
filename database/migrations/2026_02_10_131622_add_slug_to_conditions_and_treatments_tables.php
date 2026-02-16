<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Columns already exist in the create tables migrations
        // Schema::table('conditions', function (Blueprint $table) {
        //     $table->string('slug')->nullable()->after('title');
        // });

        // Schema::table('treatments', function (Blueprint $table) {
        //     $table->string('slug')->nullable()->after('title');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('conditions', function (Blueprint $table) {
        //     $table->dropColumn('slug');
        // });

        // Schema::table('treatments', function (Blueprint $table) {
        //     $table->dropColumn('slug');
        // });
    }
};
