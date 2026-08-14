<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesRaffleTickets extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('sales_raffle_tickets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('user_id')->unsigned()->nullable()->default(null);
            $table->integer('sale_character_id')->unsigned()->nullable()->default(null);
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('winner')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists('sales_raffle_tickets');
    }
}
