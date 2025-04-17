<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tbl_sdr')) {
            Schema::create('tbl_sdr', function (Blueprint $table) {
                $table->increments('ID'); // Fix di sini
                $table->string('ACTYPE', 50)->nullable();
                $table->string('Reg', 10)->nullable();
                $table->date('DataOccur')->nullable();
                $table->string('FlightNo', 10)->nullable();
                $table->integer('ATA')->nullable();
                $table->string('Remark', 255)->nullable();
                $table->string('Problem', 255)->nullable();
                $table->string('Rectification', 255)->nullable();

                $table->charset = 'latin1';
                $table->collation = 'latin1_swedish_ci';
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_sdr');
    }
};
