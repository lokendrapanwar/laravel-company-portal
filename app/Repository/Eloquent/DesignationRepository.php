<?php

namespace App\Repository\Eloquent;

use App\Models\Designation;

class DesignationRepository extends BaseRepository
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
    public function __construct(Designation $model)
    {
        $this->model = $model;
    }
}
