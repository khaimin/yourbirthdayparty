<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';

	protected $filltable = ['idSP','idLoai','tenSP','idNCC','icon','hinh','mota','dongia','trangthai', 'created_at'];
}
