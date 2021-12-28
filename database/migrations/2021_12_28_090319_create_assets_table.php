<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {

            $table->uuid('id')->primary();


            $table->string('user_name');
            $table->string('asset_name');
            $table->string('asset_id');

            $table->date('purchase_date');
            $table->string('warrenty');
            $table->date('warrenty_end');
            $table->float('amount');
            $table->integer('status');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
