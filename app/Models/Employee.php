<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Traits\Uuids;

class Employee extends Authenticatable
{
    use Uuids;
    use HasFactory;

    protected $guard = 'employee';

    protected $fillable = [
        'username', 'email', 'password', 'employee_id', 'first_name', 'last_name', 'email_verified_at', 'phone', 'company', 'department', 'designation', 'joining_date', 'created_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the department's only department.
     */
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }


        /**
     * Get the department's only department.
     */
    public function designation()
    {
        return $this->hasOne(Designation::class, 'id', 'designation_id');
    }
}
