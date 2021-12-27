<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Holiday extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = [
        'title', 'holiday_date', 'created_at'
    ];
    
}
