<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'first_name',
        'middle_name',
        'surname',
        'email',
        'gender',
        'marital_status',
        'date_of_birth'
    ];

    protected $casts = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'marital_status' => 'string',
        'date_of_birth' => 'date'
    ];

    public static array $rules = [
        'first_name' => 'required',
        'middle_name' => 'required',
        'surname' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'marital_status' => 'required'
    ];

    
}
