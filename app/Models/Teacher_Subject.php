<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_Subject extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id','subject_id'];

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher__subjects', 'id', 'subject_id');
    }

    public function Teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher__subjects', 'id', 'teacher_id');
    }
}
