<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Designation extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = [
        'created_at', 'department_id', 'title'
    ];

    /**
     * Get the post's only image.
     */
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}

