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

            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('brand');
            $table->date('dateAdded');
            $table->smallInteger('status')->nullable();
            $table->string('assetCode')->nullable();
            $table->string('description')->nullable();
            $table->string('condition')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
