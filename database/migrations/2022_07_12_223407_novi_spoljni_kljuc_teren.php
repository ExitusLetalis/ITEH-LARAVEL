<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviSpoljniKljucTeren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trenings', function (Blueprint $table) {
            $table->after('teniser_id', function ($table) {
                $table->foreignId('teren_id')->constrained('terens');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trenings', function (Blueprint $table) {
            $table->dropColumn('teren_id');
        });
    }
}
