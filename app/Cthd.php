<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cthd extends Model
{
    protected $table = 'cthd';

	protected $filltable = ['sohd','idSP','soluong','mota','ghichu'];
}
