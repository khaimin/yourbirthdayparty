<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCthd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('cthd', function (Blueprint $table) {
            $table->increments('id');
           
             $table->integer('sohd')->unsigned();
            $table->foreign('sohd')->references('id')->on('hoadon');
         
             $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('san_phams');
            $table->integer('soluong');
            $table->integer('ghichu');
            $table->text('mota');
            $table->rememberToken();
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
      Schema::dropIfExists('cthd');
    }
}
