<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loai_san_phams';

	protected $filltable = ['idLoai', 'tenLoai'];
}
