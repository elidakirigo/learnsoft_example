<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $table = 'employees';

    public $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'email',
        'date_of_birth',
        'phone_number',
        'marital_status',
        'gender'
    ];

    protected $casts = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'date_of_birth' => 'date',
        'phone_number' => 'string',
        'marital_status' => 'string',
        'gender' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'required',
        'middle_name' => 'required',
        'surname' => 'required',
        'email' => 'required|max:50',
        'date_of_birth' => 'required',
        'phone_number' => 'required'
    ];

    
}
