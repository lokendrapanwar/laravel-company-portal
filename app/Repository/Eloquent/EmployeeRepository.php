<?php

namespace App\Repository\Eloquent;

use App\Models\Employee;

class EmployeeRepository extends BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Employee $model)
    {
        $this->model = $model;
    }
}
