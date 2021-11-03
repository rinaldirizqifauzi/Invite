<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invites_id');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            
            $table->string('acara_pria');
            $table->string('acara_wanita');
            
            $table->date('tgl_pria'); 
            $table->date('tgl_wanita'); 

            $table->string('image_perempuan')->nullable();
            $table->string('image_lakilaki')->nullable();
            $table->string('nama_peremuan');
            $table->string('nama_lakilaki');
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
        Schema::dropIfExists('weddings');
    }
}
