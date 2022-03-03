<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends BaseModel
{
    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
