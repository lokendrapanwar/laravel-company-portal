<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Department extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = ['title', 'created_at', 'updated_at', 'deleted_at'];

}
