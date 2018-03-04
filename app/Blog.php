<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     protected $table = 'blog';

	protected $filltable = ['idTin','tieude','title','mota','noidung','hinhanh','created_at'];
}
