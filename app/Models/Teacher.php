<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;


class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['dni','name','phone','email','address','city'];

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher__subjects', 'teacher_id', 'subject_id');
    }
}
