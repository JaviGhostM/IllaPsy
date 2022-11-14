<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomenews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homenews', function (Blueprint $table) {
            $table->id();
            $table->string('homeimage');
            $table->string('hometittle', 50);
            $table->string('homedesc', 50);
            $table->string('bannerimage');
            $table->string('newtittle', 100);
            $table->string('urltittle', 100);
            $table->text('newdesc');
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
        Schema::dropIfExists('homenews');
    }
}
