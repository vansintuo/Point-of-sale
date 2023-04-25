<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_measures', function (Blueprint $table) {
            $table->id();
            $table->item_no();
            $table->unit_of_measure_code();
            $table->identifier_code();
            $table->description();
            $table->description_2();
            $table->qty_per_unit();
            $table->string('items_code')->nullable();
            $table->text('barcode')->nullable();
            $table->price();
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
        Schema::dropIfExists('item_measures');
    }
};
