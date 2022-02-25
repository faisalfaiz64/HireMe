<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerSupport extends Model
{
    protected $table= "customer_supports";
    public $primarykey ="id";
    public $timestamp = true;
}
