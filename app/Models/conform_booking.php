<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conform_booking extends Model
{
    protected $table= "conform_bookings";
    public $primarykey ="id";
    public $timestamp = true;
}
