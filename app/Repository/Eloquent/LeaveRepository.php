<?php

namespace App\Repository\Eloquent;

use App\Models\Leave;

class LeaveRepository extends BaseRepository
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
    public function __construct(Leave $model)
    {
        $this->model = $model;
    }
}
