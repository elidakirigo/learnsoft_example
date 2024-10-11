<?php

namespace App\Repositories\Admin;

use App\Models\Admin\employees;
use App\Repositories\BaseRepository;

class employeesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'middle_name',
        'surname',
        'email',
        'date_of_birth',
        'phone_number',
        'marital_status',
        'gender'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return employees::class;
    }
}
