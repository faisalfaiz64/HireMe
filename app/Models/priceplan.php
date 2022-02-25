<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class priceplan extends Model
{
    protected $table= "priceplans";
    public $primarykey ="id";
    public $timestamp = true;
}
