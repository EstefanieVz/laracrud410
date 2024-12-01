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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 50)->nullable()->default('Calle');
            $table->integer('internal_num')->unsigned()->nullable()->default(10);
            $table->integer('external_num')->unsigned()->nullable()->default(10);
            $table->string('neighborhood', 50)->nullable()->default('barrio 11');
            $table->string('town', 50)->nullable()->default('Gutierez Zamora');
            $table->string('state', 50)->nullable()->default('Veracruz');
            $table->string('country', 50)->nullable()->default('Mexico');
            $table->foreignId('client_id');
            $table->string('references', 99)->nullable()->default('parque central');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
