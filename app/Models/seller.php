<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    protected $table= "sellers";
    public $primarykey ="id";
    public $timestamp = true;

    public function sellers()
		{
			return $this->hasMany('App\sellerdata');
		}
}
