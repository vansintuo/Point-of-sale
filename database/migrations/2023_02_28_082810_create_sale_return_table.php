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
        Schema::create('sale_return', function (Blueprint $table) {
            $table->id();
            $table->document_no();
            $table->item_no();
            $table->item_description();
            $table->item_description_2();
            $table->unit_of_measure();
            $table->qty_per_unit_of_measure();
            $table->quantity();
            $table->unit_price();
            $table->unit_price_lcy();
            $table->discount_percentage();
            $table->discount_amount();
            $table->amount();
            $table->amount_lcy();
            $table->item_category_code();
            $table->item_group_code();
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
        Schema::dropIfExists('sale_return');
    }
};
