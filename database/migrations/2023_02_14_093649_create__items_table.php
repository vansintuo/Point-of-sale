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
        Schema::create('_items', function (Blueprint $table) {
            $table->no();
            $table->no_2 ();
            $table->description();
            $table->description_2 ();
            $table->item_group_code();
            $table->item_category_code();
            $table->unit_price();
            $table->inactuved();
            $table->picture();
            $table->remark();
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
        Schema::dropIfExists('_items');
    }
};
