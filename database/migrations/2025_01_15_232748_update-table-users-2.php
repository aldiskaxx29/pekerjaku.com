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
        Schema::table('users', function (Blueprint $table) {
            $table->string('ktp')->nullable()->after('image'); // Adjust the position if needed
            $table->string('selfiektp')->nullable()->after('ktp');
            $table->string('skck')->nullable()->after('selfiektp');
            $table->string('ijazah')->nullable()->after('skck');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['ktp', 'selfiektp', 'skck', 'ijazah']);
        });
    }
};
