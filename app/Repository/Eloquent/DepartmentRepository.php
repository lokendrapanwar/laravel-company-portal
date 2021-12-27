<?php

namespace App\Repository\Eloquent;

use App\Models\Department;
use App\Repository\DepartmentRepositoryInterface;

class DepartmentRepository extends BaseRepository implements DepartmentRepositoryInterface
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
    public function __construct(Department $model)
    {
        $this->model = $model;
    }
}
