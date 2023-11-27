<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Subject extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','subject_id'];


    public function Student_Subjects()
    {

        return $this->belongsToMany(Teacher_Subject::class, 'student__subjects', 'id', 'subject_id');
        //return $this->belongsToMany(Subject::class, 'teacher__subjects', 'teacher_id', 'subject_id');

    }

    

    
}
