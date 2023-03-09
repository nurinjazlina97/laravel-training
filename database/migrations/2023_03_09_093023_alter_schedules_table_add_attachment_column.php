<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('schedules', function(Blueprint $table){
            $table->string('attachment')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('schedules', function(Blueprint $table){
            $table->dropColumn('attachment');
        });
    }
};
