<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('auctiontitle')->nullable();
            $table->string('location')->nullable();
            $table->string('lotrefno')->nullable();
            $table->string('lotno')->nullable();
            $table->string('period');
            $table->string('title');
            $table->string('price');
            $table->string('dimension');
            $table->string('artist');
            $table->string('description');
            $table->string('category');
            $table->string('medium')->nullable();
            $table->string('frame')->nullable();
            $table->string('typeofimg')->nullable();
            $table->string('material')->nullable();
            $table->string('weight')->nullable();
            $table->string('auctionDate')->nullable();
            $table->string('auctionperiod')->nullable();
            $table->boolean('activate')->default(0);
            $table->boolean('recyclebin')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
