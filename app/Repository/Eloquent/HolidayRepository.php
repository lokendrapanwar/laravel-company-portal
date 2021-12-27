<?php

namespace App\Repository\Eloquent;

use App\Models\Holiday;

class HolidayRepository extends BaseRepository
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
    public function __construct(Holiday $model)
    {
        $this->model = $model;
    }
}
