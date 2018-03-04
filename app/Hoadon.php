<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    protected $table = 'hoadon';

	protected $filltable = ['sohd', 'nghd','makh','tongtien','trangthai','ghichu'];
}
