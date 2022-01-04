<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptocurrencyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cryptocurrency_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cryptocurrency_id')->constrained('cryptocurrencies')
                ->cascadeOnDelete();
            $table->string('locale', 5);
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptocurrency_translations');
    }
}
