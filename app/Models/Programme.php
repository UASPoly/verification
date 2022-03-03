<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends BaseModel
{
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function certificates()
    {
        $numbers = 0;
        foreach($this->students as $student){
            if($student->certificate){
                $numbers += 1;
            }
        }
        return $numbers;
    }
}
