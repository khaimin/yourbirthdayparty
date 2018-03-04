<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idSP')->unique();
            $table->string('idLoai');
            $table->foreign('idLoai')->references('idLoai')->on('loai_san_phams')->onDelete('cascade');
            $table->string('tenSP');
            $table->string('idNCC');
            $table->string('icon');
            $table->string('hinh');
            $table->text('mota');
            $table->string('dongia');
            $table->integer('trangthai')->default(0);
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
        Schema::dropIfExists('san_phams');
    }
}
