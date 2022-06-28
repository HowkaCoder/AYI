<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaraunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restarauns', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\City::class);
            $table->foreignIdFor(\App\Models\Rcategory::class);
            $table->string('title');
            $table->string('describtion');
            $table->string('location')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->integer('view')->default(0);
            $table->integer('stars')->default(0)->nullable();
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
        Schema::dropIfExists('restarauns');
    }
}
