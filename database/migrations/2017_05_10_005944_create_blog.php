<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTin');
           
            $table->string('tieude');
            $table->string('title');
            $table->string('mota');
            $table->string('noidung');
            $table->string('hinhanh');
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
        //
    }
}
