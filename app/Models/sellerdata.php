<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellerdata extends Model
{
    protected $table= "sellerdatas";
    public $primarykey ="id";
    public $timestamp = true;

    public function sellerdatas()
	{
		return $this->belongsTo('App\seller');
	}
	
}
