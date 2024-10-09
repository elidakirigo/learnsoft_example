<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpesaB2C extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'mpesa_b2_c_s';
}