<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingcharger extends Model
{
    protected $table= "Bookingchargers";
    public $primarykey ="id";
    public $timestamp = true;
}
