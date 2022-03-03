<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends BaseModel
{
    public function programmes()
    {
        return $this->hasMany(Programme::class);
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
