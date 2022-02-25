<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notf extends Model
{
    protected $table= "notfs";
    public $primarykey ="id";
    public $timestamp = true;
}
