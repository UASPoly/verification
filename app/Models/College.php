<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends BaseModel
{
    public function departments(Type $var = null)
    {
        return $this->hasMany(Department::class);
    }
}
