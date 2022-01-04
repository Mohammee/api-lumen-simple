<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinAlarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_alarms', function (Blueprint $table) {
            $table->id();
            $table->string('generate_key');
            $table->foreignId('coin_id')
            ->constrained('cryptocurrencies')
            ->cascadeOnDelete();
            $table->string('operator_type');
            $table->float('value');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}
