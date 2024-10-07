<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Employee;
use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'middle_name',
        'surname',
        'email',
        'gender',
        'marital_status',
        'date_of_birth'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employee::class;
    }
}
