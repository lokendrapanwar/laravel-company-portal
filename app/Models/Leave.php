<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Leave extends Model
{
    use Uuids;
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d h:i:s',
        'from_date'  => 'date:Y-m-d',
        'to_date'  => 'date:Y-m-d'
     ];

    protected $fillable = [
        'leave_type', 'from_date', 'to_date', 'number_of_days', 'remaining_leaves', 'leave_reason'
    ];
}
